<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class PalForm extends BaseEntity {
    protected $table = 'palForm';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'city',
        'description',
    ];

    const ROUTE_INDEX = 'admin.palforms';
    const ROUTE_DETAILS = 'admin.palforms';

    const FORM_DISABLED = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'city',
        'description',
    ];

    const FORM_LABEL = [

    ];

    const FORM_TYPE = [
        'firstName' => 'Text',
        'lastName' => 'Text',
        'email' => 'Text',
        'phoneNumber' => 'Text',
        'city' => 'Text',
        'description' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'email',
        'description',
    ];
    const FORM_SELECT_LIST = [

    ];

    public function getValue($key, $listItem, $language){
        if ($key == 'name') return @$this->firstName.' '.@$this->lastName;


        return parent::getValue($key, $listItem, $language);
    }
}
