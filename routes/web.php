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

Route::get('/', ["uses" => "IndexController@index", "as" => "index"]);
Route::post('contacts', ["uses" => "indexController@contact", "as" => "contact"]);

Route::group(['prefix' => 'admin', "middleware" => ["auth", "admin"], "as" => "admin."], function () {
    Route::get('/dashboard', ["uses" => "Admin\IndexController@dashboard", "as" => "dashboard"]);
    Route::resource('/headers', "Admin\HeaderController");
    Route::resource('/informations', "Admin\InformationController");
    Route::resource('/coffees', "Admin\CoffeeController");
    Route::resource('/galleries', "Admin\GalleryController");
    Route::resource('/products', "Admin\ProductController");
    Route::resource('/progresses', "Admin\ProgressController");
    Route::resource('/footers', "Admin\FooterController");
    Route::resource('/navigates', "Admin\NavigateController");
    Route::resource('/socials', "Admin\SocialController");
    Route::resource('/contacts', "Admin\ContactController");
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
