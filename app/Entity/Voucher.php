<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetail;
use App\Util\Constant;


class Voucher extends BaseEntity {
    protected $table = 'voucher';

    const ROUTE_INDEX = 'admin.vouchers';
    const ROUTE_DETAILS = 'admin.voucher';

    const FORM_TYPE = [
        'name' => 'Text',
        'code' => 'Text',
        'description' => 'TextArea',
        'type' => 'Select',
        'value' => 'Number'
    ];

    const INDEX_FIELD = [
        'name',
        'code',
        'voucherType',
        'value'
    ];

    const FORM_SELECT_LIST = [
        'type' => 'GetVoucherType',
    ];

    public function getValue($key, $listItem, $language){
        if ($key == 'voucherType') {
            $label = Constant::OPTION_LABEL_VOUCHER;

            return $label[$this->type];
        }


        return parent::getValue($key, $listItem, $language);
    }
}
