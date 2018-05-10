<?php
namespace App\Service;


class UrlService {


    public static function CreatePrettyUrl($urlFrom){

        if (!isset($urlFrom)) return '';


        $prettyUrl = preg_replace(array('/\s+/', '/[-?]/'), '-', $urlFrom).'-'.str_random(2);


        return $prettyUrl;
    }
}
