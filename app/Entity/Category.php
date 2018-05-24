<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class Category extends BaseEntity {
    protected $table = 'category';

    const ROUTE_INDEX = 'admin.categories';
    const ROUTE_DETAILS = 'admin.category';

    const FORM_TYPE = [
        'name' => 'Text',
        'icon' => 'Image_1',
        'summary' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'summary',
    ];
    const FORM_SELECT_LIST = [

    ];

    function getIconAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }
}
