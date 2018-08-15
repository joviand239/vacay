<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Booking;
use App\Entity\BookingItem;
use App\Entity\Category;

use App\Entity\City;
use App\Entity\CMS\WhyGerayPrint;
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




        return redirect()->route('booking-payment', ['bookingNumber' => @$booking->bookingNumber]);

        // return $this->paymentMidtrans($booking);
    }


    public function paypalGateway($bookingNumber){
        if (!$bookingNumber) return redirect()->route('booking-error');

        $booking = Booking::where('bookingNumber', @$bookingNumber)->get()->first();

        if (!$booking) return redirect()->route('booking-error');

        return view('frontend.booking-payment', [
            'bookingNumber' => @$bookingNumber
        ]);
    }


    public function submitPaypal($bookingNumber){
        if (!$bookingNumber) return redirect()->route('booking-error');

        $booking = Booking::where('bookingNumber', @$bookingNumber)->get()->first();

        if (!$booking) return redirect()->route('booking-error');

        $input = (object)Input::all();

        $expriedDate = explode('/', @$input->expiredDate);

        $input->month = $expriedDate[0];
        $input->year = $expriedDate[1];

        $response = PaypalService::paywithCreditCard($booking, $input);

        $responeData = $response->getData()[0];

        if (@$responeData->state == 'approved' && @$responeData->transactions[0]->related_resources[0]->sale->state == 'completed') {
            $booking->status = Constant::STATUS_PAID;
            $booking->paypalTransactionId = @$responeData->transactions[0]->related_resources[0]->sale->id;
            $booking->paypalInvoiceId = @$responeData->transactions[0]->invoice_number;
            $booking->save();
        }

        return redirect()->route('booking-success', ['bookingNumber' => @$booking->bookingNumber]);
    }



    private function paymentMidtrans($booking){

        Session::put('oldOrder', true);

        return view('frontend.booking-success', [
            'booking' => $booking,
            'snapToken' => VeritransService::GetSnapToken($booking)
        ]);
    }

    public function getSuccessPage($bookingNumber) {
        if (!$bookingNumber) return redirect()->route('booking-error');

        $booking = Booking::where('bookingNumber', @$bookingNumber)->get()->first();

        if (!$booking) return redirect()->route('booking-error');


        return view('frontend.booking-success', [
            'booking' => $booking
        ]);
    }

    public function getErrorPage() {

        return view('frontend.booking-error');
    }
}
