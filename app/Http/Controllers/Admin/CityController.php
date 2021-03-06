<?php

namespace App\Http\Controllers\Admin;

use App\Entity\City;
use App\Entity\CityCategory;
use App\Entity\CityTestimonial;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\CMSCore\FileService;
use App\Service\UrlService;
use Illuminate\Support\Facades\Input;

class CityController extends Controller {
    public function index() {
        return view('admin.city.index', ['list'=>City::all(), 'model'=>City::class]);
    }
    public function details($id) {


        return view('admin.city.details', ['model'=>City::get($id), 'id' => $id, 'modelTestimonial' => CityTestimonial::class, 'modelCategory' => CityCategory::class]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, City::class);

        if ($id == 0) {
            $model->url = UrlService::CreatePrettyUrl(@$model->name, City::class);
        }

        $data = Input::all();

        if (isset($data['iteneraryFile']) && !is_string($data['iteneraryFile'])) {
            FileService::delete( $model->iteneraryFile);
            $model->iteneraryFile = FileService::UploadFile($data['iteneraryFile']);
        }elseif (isset($data['iteneraryFile']) && $data['iteneraryFile'] == 'DELETE_FILE'){
            FileService::delete( $model->iteneraryFile);
            $model->iteneraryFile = null;
        }

        $model->save();

        return redirect(route('admin.cities'));
    }
    public function delete($id) {
        $item = City::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.cities'));
    }
}
