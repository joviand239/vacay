<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\How;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class HowController extends FrontendController {

    public function index() {

        $page = How::getPage();

        return view('frontend.how', [
            'page' => $page->json,
        ]);
    }
}
