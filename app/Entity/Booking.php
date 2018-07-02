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
        'status'
    ];

    const MANUAL_SAVE_FIELD = [
        'customerName'
    ];

    const ROUTE_INDEX = 'admin.bookings';
    const ROUTE_DETAILS = 'admin.booking';

    const FORM_TYPE = [
        'bookingNumber' => 'Text',
        'cityId' => 'Select',
        'customerName' => 'Text',
        'email' => 'Text',
        'phoneNumber' => 'Text',
        'bookingDate' => 'Date',
        'message' => 'TextArea',
        'withItenerary' => 'Select',
        'status' => 'Select',
    ]; 

    const FORM_REQUIRED = [
        // 
    ];

    const FORM_DISABLED = [
        'bookingNumber',
        'cityId',
        'customerName',
        'email',
        'phoneNumber',
        'bookingDate',
        'message',
        'withItenerary',
        'iteneraryPrice',
        'totalLineItem',
        'grandTotal',
        'grandTotalIdr',
    ]; 

    const INDEX_FIELD = [
        'bookingNumber',
        'customerName', 
        'bookingDate',
        'total',
        'statusPayment',
    ];

    const FORM_SELECT_LIST = [
        'cityId' => 'GetCityList',
        'withItenerary' => 'GetYesOrNo',
        'status' => 'GetStatusPaymentlList'
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
        }elseif($key == 'total') {
            return '$' . getPriceNumber($this->grandTotal);
        }elseif($key == 'statusPayment') {
            return @getOrderStatusName($this->status);
        }elseif($key == 'email') {
            return @$this->customerDetail->email;
        }elseif($key == 'phoneNumber') {
            return $this->customerDetail->phoneNumber;
        }
        return parent::getValue($key, $listItem, $language);
    }
}
