<?php

namespace App\Entity;

use App\Entity\Attribute\AttributeBase;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerAddress;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;

class Booking extends BaseEntity {
    protected $casts = [
        'totalLineItem' => 'integer',  
        'itenenaryPrice' => 'integer',
        'grandTotal' => 'integer',
        'grandTotalIdr' => 'integer'
    ];
    protected $appends = [
        //
    ]; 
    protected $table = 'booking';
    protected $fillable = [

    ];

    const ROUTE_INDEX = 'admin.bookings';
    const ROUTE_DETAILS = 'admin.booking';

    const FORM_TYPE = [
        //
    ]; 

    const FORM_REQUIRED = [
        // 
    ];

    const FORM_DISABLED = [
        // 
    ]; 

    const INDEX_FIELD = [
        'bookingNumber',
        'customerName', 
        'bookingDate',
        'grandTotal', 
        'status',
    ]; 

    const FORM_SELECT_LIST = [
        //
    ];


    public function bookingCity() {
        return $this->belongsTo(City::class);
    }

    public function bookingItems() {
        return $this->hasMany(BookingItem::class);
    }

    public function customerDetail() {
        return $this->belongsTo(CustomerDetail::class);
    }

    public function getValue($key, $listItem, $language){
        if($key == 'customerName') {
            if($this->customerDetail) return $this->customerDetail->firstName.' '.$this->customerDetail->lastName; 
            return 'N/A';
        } elseif($key == 'grandTotal') {
            return getPriceNumber($this->grandTotal); 
        }
        return parent::getValue($key, $listItem, $language);
    }
}
