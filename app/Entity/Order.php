<?php

namespace App\Entity;

use App\Entity\Attribute\AttributeBase;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerAddress;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;

class Order extends BaseEntity {
    protected $casts = [
        'totalLineItem' => 'integer',  
        'itenenaryPrice' => 'integer',
        'grandTotal' => 'integer',
    ];
    protected $appends = [
        //
    ]; 
    protected $table = 'order';
    protected $fillable = [
        'status'
    ];

    const MANUAL_SAVE_FIELD = [
        'customerName'
    ];

    const ROUTE_INDEX = 'admin.bookings';
    const ROUTE_DETAILS = 'admin.booking';

    const FORM_TYPE = [
        'cityId' => 'Text',
        'orderNumber' => 'Text',
        'customerName' => 'Text',
        'email' => 'Text',
        'phoneNumber' => 'Text',
        'status' => 'Text',
        'grandTotal' => 'Amount',
    ]; 

    const FORM_REQUIRED = [
        // 
    ];

    const FORM_DISABLED = [
        'orderNumber',
        'cityId',
        'customerName',
        'email',
        'phoneNumber',
        'grandTotal',
    ]; 

    const INDEX_FIELD = [
        'orderNumber',
        'customerName',
        'total',
        'statusPayment',
    ];

    const FORM_SELECT_LIST = [
        'cityId' => 'GetCityList',
        'status' => 'GetStatusPaymentlList'
    ];


    public function city() {
        return $this->belongsTo(City::class);
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
