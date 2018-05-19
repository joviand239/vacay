<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\City;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use Illuminate\Support\Facades\Input;


class BookingController extends FrontendController {

    public function details($url = '') {
        $data = (object)Input::all();

        $page = City::with(['categories.category'])->where('url', $url)->get()->first();

        $selectedCityCategory = [];
        $selectedCityCategory[] = 0;

        if (isset($data->categoryData)) {
            $selectedCityCategory[0] = (int)$data->categoryData;
        }

        return view('frontend.booking', [
            'page' => $page,
            'selectedCityCategory' => $selectedCityCategory,
        ]);
    }
}
