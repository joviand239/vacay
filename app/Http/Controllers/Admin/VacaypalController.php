<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Category;
use App\Entity\VacayPal;
use App\Entity\VacayPalReview;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class VacaypalController extends Controller {
    public function index() {
        return view('admin.vacaypal.index', ['list'=>VacayPal::all(), 'model'=>VacayPal::class]);
    }
    public function details($id) {
        return view('admin.vacaypal.details', ['model'=>VacayPal::get($id), 'id' => $id, 'modelReview' => VacayPalReview::class]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, VacayPal::class);

        if ($id == 0) {
            $model->url = UrlService::CreatePrettyUrl(@$model->name, VacayPal::class);
        }

        $model->save();

        return redirect(route('admin.vacaypals'));
    }
    public function delete($id) {
        $item = VacayPal::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.vacaypals'));
    }
}
