<?php

Route::group(['prefix'=>'admin'], function () {
	Route::get('/reset', 'Admin\UserController@reset');
	Route::auth();

	Route::get('/socialite/redirect/{provider}',  'Admin\SocialiteController@getSocialRedirect')->name('socialite.redirect');
	Route::get('/socialite/handle/{provider}',  'Admin\SocialiteController@getSocialHandle')->name('socialite.handle');

	Route::group(['middleware' => ['authweb'], 'roles'=>['ADMIN'], 'redirect'=>'/admin/login'], function () {

		Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
		Route::get('/backtoprevious', 'CMSCore\Admin\BackController@back' )->name('admin.back');

        Route::get('/users/', function () {return redirect('admin/');} );
        Route::get('/user/{id?}', 'Admin\AdminController@details')->name('admin.user');
        Route::post('/user/{id?}', 'Admin\AdminController@save')->name('admin.user-save');

		Route::get('/cms/{type}/{subtype?}', 'CMSCore\Admin\CMSController@index')->name('admin.page');
		Route::get('/cms/details/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@details');
		Route::post('/cms/details/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@save');
		Route::get('/cms/delete/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@delete');

		Route::get('/orders/{status}/{customer}', 'Admin\OrderController@index')->name('orders');
		Route::get('/order/{id?}', 'Admin\OrderController@details')->name('order');
		Route::post('/order/{id?}', 'Admin\OrderController@save');
		Route::get('/order/delete/{id?}', 'Admin\OrderController@delete');

        CMSCore::CRUDRoute('setting');

        CMSCore::CRUDRoute('continent', 'continents');
        CMSCore::CRUDRoute('country', 'countries');
        CMSCore::CRUDRoute('category', 'categories');
        CMSCore::CRUDRoute('city', 'cities');

        CMSCore::CRUDRoute('vacaypal', 'vacaypals');

        CMSCore::CRUDRoute('contactform', 'contactforms');
        CMSCore::CRUDRoute('palform', 'palforms');

        Route::get('/vacaypal/{parentId}/review/{id}', 'Admin\VacayPalReviewController@details')->name('vacaypal-review');
        Route::post('/vacaypal/{parentId}/review/{id}', 'Admin\VacayPalReviewController@save')->name('vacaypal-review-save');
        Route::get('/vacaypal-review/delete/{id}', 'Admin\VacayPalReviewController@delete')->name('vacaypal-review-delete');

        CMSCore::CRUDRoute('booking', 'bookings');

        Route::get('/city/{parentId}/testimonial/{id}', 'Admin\CityTestimonialController@details')->name('city-testimonial');
        Route::post('/city/{parentId}/testimonial/{id}', 'Admin\CityTestimonialController@save')->name('city-testimonial-save');
        Route::get('/city-testimonial/delete/{id}', 'Admin\CityTestimonialController@delete')->name('city-testimonial-delete');

        Route::get('/city/{parentId}/category/{id}', 'Admin\CityCategoryController@details')->name('city-category');
        Route::post('/city/{parentId}/category/{id}', 'Admin\CityCategoryController@save')->name('city-category-save');
        Route::get('/city-category/delete/{id}', 'Admin\CityCategoryController@delete')->name('city-category-delete');

	});
});

Route::group(['middleware' => ['authweb'], 'roles'=>['CUSTOMER', 'CUSTOMERBIZ'], 'redirect'=>'/login/page'], function () {


});


Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::get('/test', 'Frontend\HomeController@test')->name('test');

Route::get('/about-us', 'Frontend\AboutController@index')->name('about');

Route::get('/our-services', 'Frontend\ServiceController@index')->name('services');

Route::get('/how-it-works', 'Frontend\HowController@index')->name('how-it-works');

Route::post('/select-destination/submit', 'Frontend\DestinationController@submitSearch')->name('select-destination');

Route::get('/destinations/{type}/{url?}', 'Frontend\DestinationController@search')->name('destinations');

Route::get('/destination/{url?}', 'Frontend\DestinationController@details')->name('destination-detail');


Route::get('/vacay-pals', 'Frontend\PalsController@index')->name('vacaypals');

Route::get('/vacay-pal/{url?}', 'Frontend\PalsController@details')->name('vacaypals-detail');


Route::get('/booking/{url?}', 'Frontend\BookingController@details')->name('booking');
Route::post('/booking/submit', 'Frontend\BookingController@save')->name('booking-submit');

Route::any('/payment/notification', 'Frontend\BookingController@getPaymentNotification')->name('booking.notification');


Route::get('/contact-us', 'Frontend\ContactController@index')->name('contact');
Route::post('/contact-us/submit', 'Frontend\ContactController@submitForm')->name('contact.submit');

Route::get('/join-as-vacay-pals', 'Frontend\PalsController@joinPage')->name('vacaypals-join');
Route::post('/vacay-pals/submit', 'Frontend\PalsController@submitForm')->name('vacaypals.submit');

Route::get('/term-and-conditions', 'Frontend\HomeController@getTerms')->name('terms');




