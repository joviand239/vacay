<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\Contact;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class ContactController extends FrontendController {

    public function index() {
        $page = Contact::getPage();

        return view('frontend.contact', [
            'page' => $page->json
        ]);
    }
}
