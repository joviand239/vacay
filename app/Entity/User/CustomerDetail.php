<?php

namespace App\Entity\User;

use App\Entity\Base\User;
use App\Entity\Order;
use App\Scopes\WVICore\UserRoleScope;
use App\Util\Constant;

class CustomerDetail extends User {
    protected $table = 'customerDetail';

    protected $fillable = [
        'firstName', 'lastName', 'email', 'phoneNumber'
    ];

    const FORM_TYPE = [
        'name' => 'Text',
        'email' => 'Text',
        'phoneNumber' => 'Text',
        'address' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'email',
        'phoneNumber',
    ];
}
