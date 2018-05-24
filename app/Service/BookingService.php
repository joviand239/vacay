<?php
namespace App\Service;



use App\Entity\Booking;

class BookingService {

    public static function GenerateBookingNumber() {
        $bookingNumber = 'BOOKING/'.date('Y-m-d').'/';
        $bookingCount = Booking::whereDate('bookingDate', '=', \Carbon::now())->count();
        $bookingNumber .= str_pad(($bookingCount + 1), 6, "0", STR_PAD_LEFT);

        return $bookingNumber;
    }

}