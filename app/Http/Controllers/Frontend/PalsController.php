<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\JoinVacayPals;
use App\Entity\CMS\Pals;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class PalsController extends FrontendController {

    public function index() {
        $page = Pals::getPage();

        return view('frontend.vacaypals', [
            'page' => $page->json
        ]);
    }

    public function details($url = '') {

        return view('frontend.vacaypals-detail');
    }

    public function joinPage() {
        $page = JoinVacayPals::getPage();

        return view('frontend.vacaypals-join', [
            'page' => $page->json
        ]);
    }
}
