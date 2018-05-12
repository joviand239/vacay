<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetails;
use App\Util\Constant;


class CityTestimonial extends BaseEntity {
    protected $table = 'cityTestimonial';


    const FORM_TYPE = [
        'name' => 'Text',
        'designation' => 'Text',
        'details' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'designation',
        'details',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


    const FORM_SELECT_LIST = [

    ];


    public function city(){
        return $this->belongsTo(City::class, 'cityId');
    }


    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }


    public function getSaveUrl($parentId, $id) {
        return route('city-testimonial-save', ['parentId' => $parentId, 'id' => $id]);
    }

    public function getCancelUrl($id) {
        return route('admin.'.strtolower(City::getClassName()), ['id'=>$id]);
    }
}
