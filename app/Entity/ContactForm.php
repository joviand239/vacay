<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class ContactForm extends BaseEntity {
    protected $table = 'contactForm';

    const ROUTE_INDEX = 'admin.contactforms';
    const ROUTE_DETAILS = 'admin.contactform';

    const FORM_DISABLED = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'intention',
        'cityId',
        'message',
    ];

    const FORM_LABEL = [
        'cityId' => 'Destination City',
    ];

    const FORM_TYPE = [
        'firstName' => 'Text',
        'lastName' => 'Text',
        'email' => 'Text',
        'phoneNumber' => 'Text',
        'enquiry' => 'Select',
        'cityId' => 'Select',
        'message' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'enquiry',
        'name',
        'email',
        'message',
    ];
    const FORM_SELECT_LIST = [
        'enquiry' => 'GetEnquiryList',
        'cityId' => 'GetCityList',
    ];

    function getIconAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    public function getValue($key, $listItem, $language){
        if ($key == 'name') return @$this->firstName.' '.@$this->lastName;


        return parent::getValue($key, $listItem, $language);
    }
}
