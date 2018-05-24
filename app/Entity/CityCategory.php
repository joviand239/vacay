<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class CityCategory extends BaseEntity {
    protected $table = 'cityCategory';

    const FORM_DISABLED = [
      'categoryId'
    ];

    const FORM_TYPE = [
        'price' => 'Amount',
    ];

    const INDEX_FIELD = [
        'category',
        'price',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


    const FORM_SELECT_LIST = [
        'categoryId' => 'GetCategoryList',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function city(){
        return $this->belongsTo(City::class, 'cityId');
    }

    public function getValue($key, $listItem, $language){

        return parent::getValue($key, $listItem, $language);
    }


    public function getSaveUrl($parentId, $id) {
        return route('city-category-save', ['parentId' => $parentId, 'id' => $id]);
    }

    public function getCancelUrl($id) {
        return route('admin.'.strtolower(City::getClassName()), ['id'=>$id]);
    }
}
