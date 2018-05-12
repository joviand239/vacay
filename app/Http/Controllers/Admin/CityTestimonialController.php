<?php

namespace App\Http\Controllers\Admin;

use App\Entity\City;
use App\Entity\CityTestimonial;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CityTestimonialController extends Controller {
    public function index() {
        return view('admin.citytestimonial.index', ['list'=>City::all(), 'model'=>City::class]);
    }
    public function details($parentId, $id = 0) {
        if (!$parentId) return Redirect::back();

        $model = CityTestimonial::get($id);

        return view('admin.citytestimonial.details', ['model'=>$model, 'id' => $id, 'parentId' => $parentId]);
    }

    public function save($parentId, $id) {
        $data = Input::all();

        $parent = City::get($parentId);

        $testimonial = CityTestimonial::get($id);

        $testimonial->fill($data);

        $parent->testimonials()->save($testimonial);

        return redirect(route('admin.city', ['id' => $parentId]));
    }

    public function delete($id) {
        $item = CityTestimonial::find($id);
        $parentId = $item->cityId;
        if (!empty($item)) $item->delete();
        return redirect(route('admin.city', ['id' => $parentId]));
    }
}
