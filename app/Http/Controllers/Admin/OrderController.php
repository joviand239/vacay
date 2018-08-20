<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Order;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class OrderController extends Controller {
    public function index() {
        $list = Order::orderBy('createdAt', 'DESC')->get();

        return view('admin.order.index', ['list'=>@$list, 'model'=>Order::class]);
    }
    public function details($id) {
        $model = Order::get($id);

        return view('admin.order.details', ['model'=>@$model, 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Order::class);

        $model->save();

        return redirect(route('admin.orders'));
    }
    public function delete($id) {
        $item = Order::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.orders'));
    }
}
