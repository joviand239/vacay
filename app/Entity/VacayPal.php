<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class VacayPal extends BaseEntity {
    protected $table = 'vacayPal';

    const ROUTE_INDEX = 'admin.vacaypals';
    const ROUTE_DETAILS = 'admin.vacaypal';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'cityId' => 'Select',
        'name' => 'Text',
        'featuredImage' => 'Image_1',
        'tagline' => 'Text',
        'description' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'city',
        'name',
        'description',
    ];


    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];


    const FORM_SELECT_LIST = [
        'cityId' => 'GetCityList',
    ];

    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function reviews(){
        return $this->hasMany(VacayPalReview::class);
    }

    public function getValue($key, $listItem, $language){
        if ($key == 'city') {
            return $this->city->name;
        }


        return parent::getValue($key, $listItem, $language);
    }
}
