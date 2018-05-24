<?php
namespace App\Service;



use App\Entity\User\CustomerDetail;

class CustomerService {

    public static function CreateNewCustomer($data){

        $customer = new CustomerDetail();

        $customer->fill($data);

        $customer->save();

        return $customer;
    }

}