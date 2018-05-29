<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Setting;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\CMSCore\ImageService;
use App\Util\Constant;
use App\Util\CMSCore\ResponseUtil;
use Illuminate\Support\Facades\Input;

class SettingController extends Controller { 
	public function index($status = 'ALL') {
		return redirect()->route('admin.setting'); 
	} 

	public function details($id = 0) {
		$model = Setting::first(); 
		if(empty($model)) return redirect()->back(); 
		return view('admin.setting.details', ['model' => $model]);
	}

	public function save($id = 0) {
		$data = \Input::all(); 
		$setting = Setting::first();

        $model = CRUDService::SaveWithData($setting->id, Setting::class);


        $model->save();

		return redirect()->route('admin.settings');
	}

	public function delete($id = 0) {
		return redirect()->back(); 
	} 
}
