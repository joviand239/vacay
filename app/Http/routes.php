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
		Route::get('/user/{id?}', 'Admin\AdminController@details')->name('user');
		Route::post('/user/{id?}', 'Admin\AdminController@save' );

		Route::get('/cms/{type}/{subtype?}', 'CMSCore\Admin\CMSController@index')->name('admin.page');
		Route::get('/cms/details/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@details');
		Route::post('/cms/details/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@save');
		Route::get('/cms/delete/{type}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@delete');

		Route::get('/orders/{status}/{customer}', 'Admin\OrderController@index')->name('orders');
		Route::get('/order/{id?}', 'Admin\OrderController@details')->name('order');
		Route::post('/order/{id?}', 'Admin\OrderController@save');
		Route::get('/order/delete/{id?}', 'Admin\OrderController@delete');


		/*CMSCore::CRUDRoute('chef', 'chefs');*/


	});
});

Route::group(['middleware' => ['authweb'], 'roles'=>['CUSTOMER', 'CUSTOMERBIZ'], 'redirect'=>'/login/page'], function () {


});


Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::get('/about-us', 'Frontend\AboutController@index')->name('about');

Route::get('/our-services', 'Frontend\ServiceController@index')->name('services');

Route::get('/how-it-works', 'Frontend\HowController@index')->name('how-it-works');

Route::get('/contact-us', 'Frontend\ContactController@index')->name('contact');




