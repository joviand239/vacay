<?php
namespace App\Service;



use App\Entity\Booking;
use App\Util\CMSCore\ResponseUtil;

class BookingService {

    public static function GenerateBookingNumber() {
        $bookingNumber = 'BOOKING-'.date('Y-m-d').'-';
        $bookingCount = Booking::whereDate('bookingDate', '=', \Carbon::now())->count();
        $bookingNumber .= str_pad(($bookingCount + 1), 6, "0", STR_PAD_LEFT);

        return $bookingNumber.'-'.time();
    }


    public static function UpdateStatusByOrderNumber($bookingNumber, $newStatus) {

        $booking = Booking::where('bookingNumber', $bookingNumber)->get()->first();
        if(empty($booking)) return ResponseUtil::Error('Booking tidak ditemukan');


        $booking->status = $newStatus;
        $booking->save();
    }

}