<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Category;
use App\Entity\ContactForm;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class ContactformController extends Controller {
    public function index() {
        return view('admin.contactform.index', ['list'=>ContactForm::all(), 'model'=>ContactForm::class]);
    }
    public function details($id) {
        return view('admin.contactform.details', ['model'=>ContactForm::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, ContactForm::class);

        $model->save();

        return redirect(route('admin.contactforms'));
    }
    public function delete($id) {
        $item = ContactForm::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.contactforms'));
    }
}
