<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class VacayPalReview extends BaseEntity {
    protected $table = 'vacayPalReview';


    const FORM_TYPE = [
        'name' => 'Text',
        'profilePic' => 'Image_1',
        'rating' => 'Select',
        'reviewDate' => 'Date',
        'review' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'rating',
        'reviewDate',
        'review',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


    const FORM_SELECT_LIST = [
        'rating' => 'GetRatingList',
    ];

    function getProfilePicAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    public function getValue($key, $listItem, $language){



        return parent::getValue($key, $listItem, $language);
    }


    public function getSaveUrl($parentId, $id) {
        return route('vacaypal-review-save', ['parentId' => $parentId, 'id' => $id]);
    }

    public function getCancelUrl($id) {
        return route('admin.'.strtolower(VacayPal::getClassName()), ['id'=>$id]);
    }
}
