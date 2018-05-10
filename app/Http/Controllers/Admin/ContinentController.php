<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Continent;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;

class ContinentController extends Controller {
    public function index() {
        return view('admin.continent.index', ['list'=>Continent::all(), 'model'=>Continent::class]);
    }
    public function details($id) {
        return view('admin.continent.details', ['model'=>Continent::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Continent::class);

        $model->save();

        return redirect(route('admin.continents'));
    }
    public function delete($id) {
        $item = Continent::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.continents'));
    }
}
