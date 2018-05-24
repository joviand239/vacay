<?php

namespace App\Entity;

use App\Entity\Attribute\AttributeBase;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerAddress;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;

class BookingItem extends BaseEntity {
    protected $table = 'bookingItem';

    public function booking() {
        return $this->belongsTo(Booking::class);
    }

    public function cityCategory() {
        return $this->belongsTo(CityCategory::class);
    }

    public function getValue($key, $listItem, $language){


        return parent::getValue($key, $listItem, $language);
    }
}
