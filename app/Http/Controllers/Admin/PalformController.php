<?php

namespace App\Http\Controllers\Admin;

use App\Entity\PalForm;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class PalformController extends Controller {
    public function index() {
        return view('admin.palform.index', ['list'=>PalForm::all(), 'model'=>PalForm::class]);
    }
    public function details($id) {
        return view('admin.palform.details', ['model'=>PalForm::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, PalForm::class);

        $model->save();

        return redirect(route('admin.palforms'));
    }
    public function delete($id) {
        $item = PalForm::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.palforms'));
    }
}
