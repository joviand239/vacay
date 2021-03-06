<?php


use \App\Entity\Order;
use \App\Entity\User\Customer;
use \App\Util\Constant;
use \App\Entity\CMS\About;
use App\Entity\Setting;
use App\Entity\CMS\FeaturedTestimonial;

function getPriceNumberWithComa($value) {
    if (empty($value)) {
        return 0;
    }

    return number_format($value,2,",",".");
}

function getPriceNumber($value) {
    if (empty($value)) {
        return 0;
    }

    return number_format($value,0,",",".");
}

function getAttributeTitleDetail($type,$subtype) {
    $model = \App\Entity\Attribute\AttributeBase::class;


    $array = explode('_', $subtype);

    $modelName = '';

    foreach ($array as $item) {
        $modelName = $modelName.ucfirst(strtolower($item));
    }

    if ($type == 'ATTRIBUTE') {
        $model = "\\App\\Entity\\Attribute\\Attribute".$modelName;
    } elseif ($type == 'FINISHING') {
        $model = "\\App\\Entity\\Attribute\\Finishing".$modelName;
    }

    $key = new $model();

    return $key::TITLE_DETAILS;
}

function getImageNameFromTable($value) {
    if (empty($value)) {
        return [];
    }

    $result = json_decode($value);

    if (empty($result)) return [];

    return $result[0];
}

function getImageUrlSizeForDesignPage($filename){
    if (empty($filename)) return getNoPhoto();
    return url('/') . '/assets/upload/file/'. $filename;
}

function getProductInstruction($value) {
    $model = \App\Entity\Attribute\AttributeBase::class;

    $array = explode('_', $value);

    $modelName = '';

    foreach ($array as $item) {
        $modelName = $modelName.ucfirst(strtolower($item));
    }

    $model = "\\App\\Entity\\Attribute\\".$modelName;
    $key = new $model();

    return $key::INSTRUCTION;
}

function getProductInstructionInfo($value) {
    $model = \App\Entity\Attribute\AttributeBase::class;

    $array = explode('_', $value);

    $modelName = '';

    foreach ($array as $item) {
        $modelName = $modelName.ucfirst(strtolower($item));
    }

    $model = "\\App\\Entity\\Attribute\\".$modelName;
    $key = new $model();

    return $key::INSTRUCTION_INFO;
}

function getReadableConstFaq($data) {
    $result = str_replace("_"," ","$data");
    $result = strtolower($result);
    $result = ucwords($result);

    echo $result;
}

function getCountProductOnCart() {
    $cart = \Illuminate\Support\Facades\Session::get('cart');
    if (empty($cart) || !isset($cart)) {
        $count = 0;
    } else {
        $count = count($cart->order_items);
    }

    return $count;
}

function getCategoryProductForMenu() {
    $menu = \App\Entity\Category::eagerLoadAll()->orderBy('priority')->get();

    return $menu;
}

function getCityName($code) {
    $city_name = \App\Entity\JneCity::where('city_code', $code)->get()->first();

    if (empty($city_name)) return $code;

    return strtolower($city_name->city_name);
}

function getAboutFooterInfo($infoName){
    $about = \App\Entity\CMS\About::getPage()->json;

    return @$about->$infoName;
}

function getPartners() {
    $partners = \App\Entity\CMS\Partner::where(['subtype'=>'Partner'])->get();

    return $partners;
}

function getDeliveryTypeAttribute($value){
    if ($value == Order::DELIVERY_TYPE_REGULAR){
        return 'Regular Service';
    }elseif ($value == Order::DELIVERY_TYPE_COLLECT){
        return 'Ambil dari toko';
    }
}

function getOrderTypeAttribute($value) {
    if ($value == Constant::ORDER_TYPE_REGULAR){
        return 'Regular Service';
    }elseif ($value == Constant::ORDER_TYPE_COLLECT){
        return 'Ambil dari toko';
    } elseif($value == Constant::ORDER_TYPE_CUSTOM) {
        return 'Custom Order';
    }
}

function getPaymentMethodAttribute($value){
    if ($value == 'VIRTUAL-ACCOUNT'){
        return 'Virtual Account';
    }elseif ($value == 'CREDIT-CARD'){
        return 'Credit Card';
    }
}

function getCustomerStatusAttribute($value) {
    if ($value == Customer::STATUS_ACTIVE){
        return 'Aktif';
    }elseif ($value == Customer::STATUS_VERIFY){
        return 'Menunggu Verifikasi';
    } elseif ($value == Customer::STATUS_INACTIVE) {
        return 'Belum Aktif';
    }
}

function GetFileURL($fileName){
	if ( !File::exists( public_path(env('UPLOAD_FILE')) . $fileName ) ) return '';

	return url(env('UPLOAD_FILE')).'/'.$fileName;
}

function GetFileName($listFile){
	if(empty($listFile)) return '';

	if(is_string($listFile)) $listFile = json_decode($listFile);

	if (count($listFile) < 1) return '';

	return $listFile[0];
}

function getPromoTypeName($name) {
    $map = [
        'PERCENTAGE' => 'Percentage',
        'FIXED' => 'Fixed'
    ];

    return $map[$name];
}

function getPromoFormatName($name) {
    $map = [
        'GENERAL' => 'General',
        'REFERRAL' => 'Referral'
    ];

    return $map[$name];
}

function getOrderStatusName($name) {
    $map = Constant::PAYMENT_STATUS_LABEL;

    return $map[$name];
}

function getSettingAttribute($key){
    $page = Setting::with(['vacayPals', 'cities'])->first();


    if (isset($page->$key)){
        return $page->$key;
    }else {
        return '';
    }
}

function getReadableDestination($string) {
    $newString = str_replace(["-", "–"], ' ', $string);

    return ucwords($newString);
}

function imageStringToArray($stringImage) {
    if (empty($stringImage)) return [];

    return json_decode($stringImage);
}


function getEnquiryOption() {
    $map = Constant::OPTION_LABEL_ENQUIRY;


    return $map;
}

function getAllContinent() {
    $continents = \App\Entity\Continent::all();

    return $continents;
}

function getFeaturedTestimonials() {
    $list = FeaturedTestimonial::getPage();


    return @$list->json->listing;
}

function getImageUrlSizeForPicture($filename, $size){
    if (empty($filename)) return getNoPhotoProfile();
    return url('/') . '/assets/upload/' . $size .'/'. $filename;
}
function getNoPhotoProfile(){
    return url('/') . '/assets/admin/image/default-no-photo-profile.jpeg';
}
