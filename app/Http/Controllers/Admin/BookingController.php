<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Booking;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Service\UrlService;

class BookingController extends Controller {
    public function index() {
        return view('admin.booking.index', ['list'=>Booking::all(), 'model'=>Booking::class]);
    }
    public function details($id) {
        $model = Booking::get($id);

        return view('admin.booking.details', ['model'=>@$model, 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Booking::class);

        $model->save();

        return redirect(route('admin.bookings'));
    }
    public function delete($id) {
        $item = Booking::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.bookings'));
    }
}
