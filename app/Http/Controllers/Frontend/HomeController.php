<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\Terms;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class HomeController extends FrontendController {

    public function index() {

        $page = Home::getPage();

        return view('frontend.home', [
            'headerTransparent' => true,
            'page' => $page->json,
        ]);
    }


    public function getTerms() {
        $page = Terms::getPage();

        return view('frontend.terms', [
            'page' => $page->json,
        ]);
    }


    public function test() {

        return view('frontend.test');
    }
}
