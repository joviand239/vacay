<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
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
        'type' => 'Text',
        'tagline' => 'Text',
        'description' => 'TextArea',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'hasIteneraryGraphics' => 'Select',
        'itenerarySectionTitle' => 'Text',
        'itenerarySectionDescription' => 'TextArea',
        'itenerarySectionBackground' => 'Image_1',
        'iteneraryPrice' => 'Amount'
    ];

    const INDEX_FIELD = [
        'country',
        'name',
        'totalCategory',
        'hasIteneraryGraphics',
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
        'hasIteneraryGraphics' => 'GetYesOrNoSelect',
    ];


    public function testimonials(){
        return $this->hasMany(CityTestimonial::class);
    }

    public function categories(){
        return $this->hasMany(CityCategory::class);
    }

    public function country(){
        return $this->belongsTo(Country::class, 'countryId');
    }

    function getBannerImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    function getItenerarySectionBackgroundAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    function getGalleryAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    public function getValue($key, $listItem, $language){
        if ($key == 'country') {
            return $this->country->name;
        }

        if ($key == 'totalCategory') {
            return count($this->categories);
        }


        return parent::getValue($key, $listItem, $language);
    }
}
