<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\Essentials;
use App\Entity\CMS\Experience;
use App\Entity\CMS\Service;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class ServiceController extends FrontendController {

    public function index() {
        $page = Service::getPage();

        $experience = Experience::getPage();

        $categories = Category::all();

        $essentials = Essentials::getPage();

        return view('frontend.service', [
            'page' => $page->json,
            'experience' => $experience->json,
            'essentials' => $essentials->json,
            'categories' => $categories
        ]);
    }
}
