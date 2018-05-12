<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetails;
use App\Util\Constant;


class Country extends BaseEntity {
    protected $table = 'country';

    const ROUTE_INDEX = 'admin.countries';
    const ROUTE_DETAILS = 'admin.country';

    const FORM_TYPE = [
        'continentId' => 'Select',

        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'name' => 'Text',
        'description' => 'TextArea'
    ];

    const INDEX_FIELD = [
        'name',
        'description',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',

        'continentId' => 'Continent',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];


    const FORM_SELECT_LIST = [
        'continentId' => 'GetContinentList',
    ];



    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }
}
