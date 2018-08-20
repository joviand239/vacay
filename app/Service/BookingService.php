<?php
namespace App\Service;



use App\Entity\Booking;
use App\Entity\Order;
use App\Util\CMSCore\ResponseUtil;

class BookingService {

    public static function GenerateBookingNumber() {
        $number = 'BOOKING-'.date('Y-m-d').'-';
        $numberCount = Booking::whereDate('bookingDate', '=', \Carbon::now())->count();
        $number .= str_pad(($numberCount + 1), 6, "0", STR_PAD_LEFT);

        return $number.'-'.time();
    }

    public static function GenerateOrderNumber() {
        $number = 'ORDER-'.date('Y-m-d').'-';
        $numberCount = Order::whereDate('createdAt', '=', \Carbon::now())->count();
        $number .= str_pad(($numberCount + 1), 6, "0", STR_PAD_LEFT);

        return $number.'-'.time();
    }


    public static function UpdateStatusByOrderNumber($bookingNumber, $newStatus) {

        $booking = Booking::where('bookingNumber', $bookingNumber)->get()->first();
        if(empty($booking)) return ResponseUtil::Error('Booking tidak ditemukan');


        $booking->status = $newStatus;
        $booking->save();
    }

}