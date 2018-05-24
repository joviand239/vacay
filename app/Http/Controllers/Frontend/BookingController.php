<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Booking;
use App\Entity\BookingItem;
use App\Entity\Category;

use App\Entity\City;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Entity\User\CustomerDetail;
use App\Service\BookingService;
use App\Service\CustomerService;
use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use App\Util\Constant;
use Illuminate\Support\Facades\Input;


class BookingController extends FrontendController {

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


        return redirect()->back();
    }
}
