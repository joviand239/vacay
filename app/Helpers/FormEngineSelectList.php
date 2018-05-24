<?php

use App\Entity\Chef;
use App\Entity\CoursePlace;
use App\Entity\ProductCategory;
use App\Entity\Continent;
use App\Util\Constant;
use App\Entity\Country;
use App\Entity\Category;
use App\Entity\City;


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

function GetCountryList() {
    $map = [];
    foreach(Country::all() as $item){
        $map[$item->id] = $item->name;
    }
    return $map;
}

function GetCategoryList($id) {
    $map = [];

    $city = City::get($id);
    $cityCategory = $city->categories->pluck('categoryId');

    $cityCategory = $cityCategory->toArray();

    foreach(Category::all() as $item){

        if(!in_array($item->id, $cityCategory)) {
            $map[$item->id] = $item->name;
        }


    }
    return $map;
}


function GetCityList() {
    $map = [];
    foreach(City::all() as $item){
        $map[$item->id] = $item->name;
    }
    return $map;
}


function GetRatingList() {
    $map = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
    ];

    return $map;
}