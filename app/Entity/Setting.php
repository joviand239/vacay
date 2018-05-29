<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Attribute\AttributeBase;
use App\Entity\Base\BaseEntity;

class Setting extends BaseEntity {
    use SingleImageTrait; 
    protected $casts = [
        //
    ];
    protected $appends = [
        // 
    ]; 
    protected $table = 'setting';
    protected $fillable = [
        'companyName',
        'companyPhone',
        'companyEmail',
        'companyAddress',
        'facebookLink',
        'instagramLink',
        'googlePlusLink',
        'youtubeLink',
    ];

    public function vacayPals() {
        return $this->belongsToMany(VacayPal::class, 'settingPals');
    }

    public function cities() {
        return $this->belongsToMany(City::class, 'settingCities');
    }

    const FORM_LABEL = [
        'companyName' => 'Nama Perusahaan', 
        'companyPhone' => 'No. Telp', 
        'companyEmail' => 'Email',
        'companyAddress' => 'Alamat',
        'facebookLink' => 'Page Facebook',
        'instagramLink' => 'Page Instagram',
        'googlePlusLink' => 'Page Google Plus',
        'youtubeLink' => 'Page Youtube',
        'vacayPals' => 'Featured Pals',
        'cities' => 'Featured Cities',
    ]; 

    const FORM_TYPE = [
        'companyName' => 'Text', 
        'companyPhone' => 'Text', 
        'companyEmail' => 'Text', 
        'companyAddress' => 'TextArea',
        'facebookLink' => 'Text',
        'instagramLink' => 'Text',
        'googlePlusLink' => 'Text',
        'youtubeLink' => 'Text',
        'vacayPals' => 'FastSelect',
        'cities' => 'FastSelect',
    ]; 

    const FORM_REQUIRED = [
        //
    ];

    const FORM_DISABLED = [
        // 
    ]; 

    const INDEX_FIELD = [
        //  
    ]; 

    const FORM_SELECT_LIST = [
        'vacayPals' => 'GetVacayPalList',
        'cities' => 'GetCityList',
    ]; 
}
