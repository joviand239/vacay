<?php

use App\Entity\Chef;
use App\Entity\CoursePlace;
use App\Entity\ProductCategory;
use App\Entity\Continent;
use App\Util\Constant;


function GetChefList() {
    $map = [];
    foreach(Chef::all() as $item){
        $map[$item->id] = $item->name;
    }
    return $map;
}

function GetYesOrNoSelect() {
    $map = [
        Constant::YES => 'Yes',
        Constant::NO => 'No'
    ];

    return $map;
}

function GetProductCategoryList() {
    $map = [];
    foreach(ProductCategory::all() as $item){
        $map[$item->id] = $item->name;
    }
    return $map;
}


function GetContinentList() {
    $map = [];
    foreach(Continent::all() as $item){
        $map[$item->id] = $item->name;
    }
    return $map;
}