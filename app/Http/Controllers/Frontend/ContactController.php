<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\Contact;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\ContactForm;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use App\Util\CMSCore\ResponseUtil;
use Illuminate\Support\Facades\Input;
use PhpParser\Node\Expr\New_;


class ContactController extends FrontendController {

    public function index() {
        $page = Contact::getPage();

        return view('frontend.contact', [
            'page' => $page->json
        ]);
    }

    public function submitForm() {
        $data = Input::all();

        $contactForm = new ContactForm();

        $contactForm->fill($data);

        $contactForm->save();

        $message = [
            'title' => 'Thankyou for contacting us!',
            'summary' => 'we will contact you shortly',
        ];

        return ResponseUtil::Success($message);
    }
}
