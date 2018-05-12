<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Category;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class CategoryController extends Controller {
    public function index() {
        return view('admin.category.index', ['list'=>Category::all(), 'model'=>Category::class]);
    }
    public function details($id) {
        return view('admin.category.details', ['model'=>Category::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Category::class);

        $model->save();

        return redirect(route('admin.categories'));
    }
    public function delete($id) {
        $item = Category::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.categories'));
    }
}
