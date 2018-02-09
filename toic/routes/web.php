<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('tradiem', function (){
	echo "string";
});

Route::get('tradiem1', 'Controller@chao');

Route::get('tradiem2/{msv}', function ($msv) {
	echo "ma sinh vien la : $msv";
});


Route::get('tradiem2/{msv}', function ($msv) {
	echo "ma sinh vien la : $msv";
})->where(['msv' => 'B\d{2}DCCN\d{3}']);


Route::get('goitenphu', 'Controller@goiten');

Route::get('tenchinh', ['as' => 'tenphu', function(){
	echo "vao trang goi ten test.";
}]);

Route::group(['prefix' => 'xemtrang'], function () {
	Route::get('trang1', function (){
		echo "trang 1";
	});
	Route::get('trang2', function (){
		echo "trang 2";
	});
	Route::get('trang3', function (){
		echo "trang 3";
	});
});


Route::get('goiview', function(){
	return view('layout.page');
});

View::share('tieude', "share cho cac view ");


View::composer(['layout.page'], function ($view) {
	return $view->with('bien', "view composer");
});

Route::get('trang1', function(){
	return view('admin.trang1');
});
Route::get('trang2', function(){
	return view('admin.trang2');
});
Route::get('trang3', function(){
	return view('admin.trang3');
});

Route::get('goi', 'Controller@goi');

Route::get('url/full', ['as' => 'duongdan', function(){
	return URL::full();
}]);

Route::get('thamso/{so1}/{so2?}', function($so1 , $so2) {
	return $so1 . " - " . $so2;
})->where(['so1' => '\d{2}', 'so2' => '\d{3}']);