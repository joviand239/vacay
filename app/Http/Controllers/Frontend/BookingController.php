<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Booking;
use App\Entity\BookingItem;
use App\Entity\Category;

use App\Entity\City;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Order;
use App\Entity\Product;

use App\Entity\Setting;
use App\Entity\User\CustomerDetail;
use App\Service\BookingService;
use App\Service\CustomerService;
use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use App\Service\Payment\PaypalService;
use App\Service\Payment\VeritransService;
use App\Util\CMSCore\ResponseUtil;
use App\Util\Constant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class BookingController extends FrontendController {

    public function getPaymentNotification() {
        VeritransService::SettlementNotification();
    }

    public function details($url = '') {
        $data = (object)Input::all();

        $page = City::with(['categories.category'])->where('url', $url)->get()->first();

        $selectedCityCategory = [];
        $selectedCityCategory[] = 0;

        if (isset($data->categoryData)) {
            $selectedCityCategory[0] = (int)$data->categoryData;
        }

        return view('frontend.booking', [
            'page' => $page,
            'selectedCityCategory' => $selectedCityCategory,
        ]);
    }

    public function save(){
        $data = (object)Input::all();

        $data = json_decode($data->formData);

        $oldOrder = Session::get('oldOrder');

        if ($oldOrder){
            Session::put('oldOrder', false);
            return redirect()->route('home');
        }

        $customer = CustomerDetail::where('email', $data->email)->get()->first();

        if (!$customer) {
            $customerData = [
                'firstName' => $data->firstName,
                'lastName' => $data->lastName,
                'email' => $data->email,
                'phoneNumber' => $data->phoneNumber,
            ];

            $customer = CustomerService::CreateNewCustomer($customerData);
        }

        $setting = Setting::first();

        $booking = new Booking();

        $formatDate = \Carbon::now();

        $booking->customerDetailId = $customer->id;
        $booking->cityId = $data->cityId;
        $booking->firstName = $data->firstName;
        $booking->lastName = $data->lastName;
        $booking->bookingNumber = BookingService::GenerateBookingNumber();
        $booking->bookingDate = $formatDate->format('Y-m-d h:i:s');
        $booking->withItenerary = $data->withItenerary;
        $booking->iteneraryPrice = $data->iteneraryPrice;
        $booking->message = $data->message;
        $booking->totalLineItem = $data->totalLineItem;
        $booking->grandTotal = $data->grandTotal;
        $booking->grandTotalIdr = (int)$data->grandTotal;
        $booking->status = Constant::STATUS_ACTIVE;

        $booking->save();

        foreach ($data->listCategory as $category) {
            $bookingItem = new BookingItem();

            $bookingItem->cityCategoryId = $category->id;
            $bookingItem->bookingDate = $category->date;
            $bookingItem->price = $category->price;
            $bookingItem->quantity = $category->quantity;
            $bookingItem->totalPrice = $category->totalPrice;

            $booking->bookingItems()->save($bookingItem);
        }




        return redirect()->route('payment', ['number' => @$booking->bookingNumber, 'type' => 'BOOKING']);

        // return $this->paymentMidtrans($booking);
    }

    public function orderEssential(){
        $input = (object)Input::all();

        $customer = CustomerDetail::where('email', $input->email)->get()->first();

        if (!$customer) {
            $customerData = [
                'firstName' => $input->firstName,
                'lastName' => $input->lastName,
                'email' => $input->email,
                'phoneNumber' => $input->phoneNumber,
            ];

            $customer = CustomerService::CreateNewCustomer($customerData);
        }

        $order = new Order();

        $city = City::get(@$input->cityId);

        $order->customerDetailId = $customer->id;
        $order->cityId = $input->cityId;
        $order->firstName = $input->firstName;
        $order->lastName = $input->lastName;
        $order->orderNumber = BookingService::GenerateOrderNumber();
        $order->grandTotal = $city->iteneraryPrice;
        $order->status = Constant::STATUS_ACTIVE;

        $order->save();

        return redirect()->route('payment', ['number' => @$order->orderNumber, 'type' => 'ORDER']);
    }


    public function paypalGateway($number, $type){
        if (!$number) return redirect()->route('error', ['type' => @$type]);

        if ($type == 'BOOKING') {
            $model = Booking::where('bookingNumber', @$number)->get()->first();
        }elseif ($type == 'ORDER'){
            $model = Order::where('orderNumber', @$number)->get()->first();
        }

        if (!$model) return redirect()->route('error', ['type' => @$type]);

        return view('frontend.booking-payment', [
            'number' => @$number,
            'type' => $type
        ]);
    }


    public function submitPaypal($number,  $type){
        if (!$number) return redirect()->route('error', ['type' => @$type]);

        if ($type == 'BOOKING') {
            $model = Booking::where('bookingNumber', @$number)->get()->first();
        }elseif ($type == 'ORDER'){
            $model = Order::where('orderNumber', @$number)->get()->first();
        }

        if (!$model) return redirect()->route('error');

        $input = (object)Input::all();

        $expriedDate = explode('/', @$input->expiredDate);
        $input->month = $expriedDate[0];
        $input->year = $expriedDate[1];

        $response = PaypalService::paywithCreditCard($model, $input, $type);

        $responeData = $response->getData()[0];

        if (@$responeData->state == 'approved' && @$responeData->transactions[0]->related_resources[0]->sale->state == 'completed') {
            $model->status = Constant::STATUS_PAID;
            $model->paypalTransactionId = @$responeData->transactions[0]->related_resources[0]->sale->id;
            $model->paypalInvoiceId = @$responeData->transactions[0]->invoice_number;
            $model->save();
        }

        return redirect()->route('success', [
            'number' => $number,
            'type' => $type,
        ]);
    }



    private function paymentMidtrans($booking){

        Session::put('oldOrder', true);

        return view('frontend.booking-success', [
            'booking' => $booking,
            'snapToken' => VeritransService::GetSnapToken($booking)
        ]);
    }

    public function getSuccessPage($number,  $type) {
        if (!$number) return redirect()->route('error', ['type' => @$type]);

        if ($type == 'BOOKING') {
            $model = Booking::where('bookingNumber', @$number)->get()->first();
        }elseif ($type == 'ORDER'){
            $model = Order::where('orderNumber', @$number)->get()->first();
        }

        if (!$model) return redirect()->route('error', ['type' => @$type]);


        return view('frontend.booking-success', [
            'model' => $model,
            'type' => $type
        ]);
    }

    public function getErrorPage($type) {

        return view('frontend.booking-error', [
            'type' => @$type
        ]);
    }
}
