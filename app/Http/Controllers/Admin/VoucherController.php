<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Voucher;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class VoucherController extends Controller {
    public function index() {
        return view('admin.voucher.index', ['list'=>Voucher::all(), 'model'=>Voucher::class]);
    }
    public function details($id) {
        return view('admin.voucher.details', ['model'=>Voucher::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Voucher::class);

        $model->save();

        return redirect(route('admin.vouchers'));
    }
    public function delete($id) {
        $item = Voucher::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.vouchers'));
    }
}
