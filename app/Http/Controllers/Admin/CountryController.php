<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Country;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class CountryController extends Controller {
    public function index() {
        return view('admin.country.index', ['list'=>Country::all(), 'model'=>Country::class]);
    }
    public function details($id) {
        return view('admin.country.details', ['model'=>Country::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Country::class);

        if ($id == 0) {
            $model->url = UrlService::CreatePrettyUrl(@$model->name, Country::class);
        }

        $model->save();

        return redirect(route('admin.countries'));
    }
    public function delete($id) {
        $item = Country::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.countries'));
    }
}
