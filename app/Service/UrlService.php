<?php
namespace App\Service;


class UrlService {


    public static function CreatePrettyUrl($urlFrom, $class){

        if (!isset($urlFrom)) return '';

        $prettyUrl = preg_replace(array('/\s+/', '/[-?]/'), '-', $urlFrom);

        $model = $class::where('url', $prettyUrl)->get()->first();

        if ($model){
            $prettyUrl = $prettyUrl.'-'.str_random(2);
        }

        return strtolower($prettyUrl);
    }
}
