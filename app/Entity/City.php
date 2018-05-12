<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetails;
use App\Util\Constant;


class City extends BaseEntity {
    protected $table = 'city';

    const ROUTE_INDEX = 'admin.cities';
    const ROUTE_DETAILS = 'admin.city';

    const FORM_DISABLED = [
        'countryId'
    ];

    const FORM_TYPE = [
        'countryId' => 'Select',

        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'bannerTitle' => 'Text',
        'bannerImage' => 'Image_1',

        'name' => 'Text',
        'tagline' => 'Text',
        'description' => 'TextArea',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'hasItenenaryGraphics' => 'Select',
        'itenenarySectionTitle' => 'Text',
        'itenenarySectionDescription' => 'TextArea',
        'itenenarySectionBackground' => 'Image_1',
        'itenenaryPrice' => 'Amount'
    ];

    const INDEX_FIELD = [
        'name',
        'description',
    ];

    const FORM_LABEL = [
        'countryId' => 'Country',
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',

        'continentId' => 'Continent',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];


    const FORM_SELECT_LIST = [
        'countryId' => 'GetCountryList',
        'hasItenenaryGraphics' => 'GetYesOrNoSelect',
    ];


    public function testimonials(){
        return $this->hasMany(CityTestimonial::class);
    }

    public function categories(){
        return $this->hasMany(CityCategory::class);
    }


    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }
}
