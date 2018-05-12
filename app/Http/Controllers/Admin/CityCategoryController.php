<?php

namespace App\Http\Controllers\Admin;

use App\Entity\City;
use App\Entity\CityCategory;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CityCategoryController extends Controller {
    public function index() {
        return view('admin.citycategory.index', ['list'=>City::all(), 'model'=>City::class]);
    }
    public function details($parentId, $id = 0) {
        if (!$parentId) return Redirect::back();

        $model = CityCategory::get($id);

        return view('admin.citycategory.details', ['model'=>$model, 'id' => $id, 'parentId' => $parentId]);
    }

    public function save($parentId, $id) {
        $data = Input::all();

        $parent = City::get($parentId);

        $category = CityCategory::get($id);

        $category->fill($data);

        $parent->categories()->save($category);

        return redirect(route('admin.city', ['id' => $parentId]));
    }

    public function delete($id) {
        $item = CityCategory::find($id);
        $parentId = $item->cityId;
        if (!empty($item)) $item->delete();
        return redirect(route('admin.city', ['id' => $parentId]));
    }
}
