<?php

namespace App\Http\Controllers\Admin;

use App\Entity\City;
use App\Entity\CityTestimonial;
use App\Entity\VacayPal;
use App\Entity\VacayPalReview;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class VacayPalReviewController extends Controller {
    public function details($parentId, $id = 0) {
        if (!$parentId) return Redirect::back();

        $model = VacayPalReview::get($id);

        return view('admin.vacaypalreview.details', ['model'=>$model, 'id' => $id, 'parentId' => $parentId]);
    }

    public function save($parentId, $id) {
        $data = Input::all();

        $review = CRUDService::SaveWithData($id, VacayPalReview::class);

        $parent = VacayPal::get($parentId);

        $parent->reviews()->save($review);

        return redirect(route('admin.vacaypal', ['id' => $parentId]));
    }

    public function delete($id) {
        $item = VacayPalReview::find($id);
        $parentId = $item->cityId;
        if (!empty($item)) $item->delete();
        return redirect(route('admin.vacaypal', ['id' => $parentId]));
    }
}
