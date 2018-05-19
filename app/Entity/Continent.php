<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetails;
use App\Util\Constant;


class Continent extends BaseEntity {
    protected $table = 'continent';

    const FORM_TYPE = [
        'name' => 'Text',
        'description' => 'TextArea'
    ];

    const INDEX_FIELD = [
        'name',
        'description',
    ];


    const FORM_SELECT_LIST = [

    ];

    public function countries(){
        return $this->hasMany(Country::class);
    }


    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }
}
