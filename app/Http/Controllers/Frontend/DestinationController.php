<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\City;
use App\Entity\CityCategory;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Continent;
use App\Entity\Country;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use App\Util\CMSCore\ResponseUtil;
use App\Util\Constant;
use Illuminate\Support\Facades\Input;


class DestinationController extends FrontendController {

    public function index() {

        return view('frontend.destination');
    }


    public function submitSearch(){
        $data = (object)Input::all();

        if (!isset($data->countryId)){
            return redirect()->route('destinations', ['type' => Constant::SEARCH_TYPE_ALL]);
        }

        $country = Country::find($data->countryId);

        if (!$country){
            return redirect()->back();
        }


        return redirect()->route('destinations', ['type' => Constant::SEARCH_TYPE_COUNTRY, 'url' => @$country->url]);
    }


    public function search($type, $url = '') {

        $list = [];
        $name = $url;


        $continents = Continent::all();

        $query = 'SELECT * , c.name as cityName, c.url as url, ctr.name as countryName FROM city as c';
        $joinQuery = '';

        if ($type == Constant::SEARCH_TYPE_ALL) {
            $name = 'All';
            $joinQuery = ' JOIN country as ctr ON c.countryId = ctr.id';
        }

        if ($type == Constant::SEARCH_TYPE_CONTINENT) {
            $selectedContinent = Continent::where('url', $url)->get()->first();

            $name = $selectedContinent->name;

            $joinQuery = ' JOIN country as ctr ON c.countryId = ctr.id
                            JOIN (
                                SELECT id
                                FROM continent
                                where id = '.$selectedContinent->id.'
                            )as ctn ON ctn.id = ctr.continentId';
        }

        if ($type == Constant::SEARCH_TYPE_COUNTRY) {
            $selectedCountry = Country::where('url', $url)->get()->first();

            $name = $selectedCountry->name;

            $joinQuery = ' JOIN (
                                SELECT id, name
                                FROM country
                                where id = '.$selectedCountry->id.'
                            )as ctr ON ctr.id = c.countryId';
        }


        $list = \DB::select(\DB::raw($query . $joinQuery . ' where c.deletedAt is null'));



        return view('frontend.destination', [
            'list' => $list,
            'name' => $name,
            'continents' => $continents
        ]);
    }



    public function details($url = '') {
        $city = City::where('url', $url)->get()->first();

        return view('frontend.destination-detail', [
            'page' => $city
        ]);
    }


    public function ajaxDetailCityCategory() {$data = Input::all();

        $cityCategory = CityCategory::with(['category'])->find($data['cityCategoryId']);

        return ResponseUtil::Success(['data' => $cityCategory]);
    }
}
