<?php

use Illuminate\Support\Facades\Route;

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
Route::get('login','UserController@Login')->name('login');
Route::get('register','UserController@Register')->name('register');
Route::get('businessprofile','BusinessController@BusinessProfile')->name('businessprofile');
Route::post('registerbusiness', 'BusinessController@registerBusiness')->name('registerbusiness');
Route::get('registerbusiness', 'BusinessController@registerBusiness')->name('registerbusiness');
Route::get('products', 'ProductController@productCatalogue')->name('products');
Route::get('dashboard', 'HomeController@index')->name('dashboard');
Route::get('admindashboard', 'HomeController@admin')->name('admindashboard');
Route::get('profile', 'ProfileController@edit')->name('profile');
Route::get('getprofile','BusinessController@getBusiness')->name('getprofile');
Route::get('getdistrict','BusinessController@getDistricts')->name('getdistrict');
Route::get('getcountries','BusinessController@getCountries')->name('getcountries');
Route::get('items','BusinessController@itemCatelogues')->name('items');
Route::get('contacts','BusinessController@businessContacts')->name('contacts');
Route::get('businesslines','BusinessController@businessLines')->name('businesslines');
Route::get('businesstypes','BusinessController@businessTypes')->name('businesstypes');
Route::get('businesslinemappings','BusinessController@businessLineMappings')->name('businesslinemappings');
Route::get('businessowners','BusinessController@businessOwners')->name('businessowners');
Route::get('businessproducts','ProductController@businessProducts')->name('businessproducts');
Route::get('productcodes','BarcodeController@businessProductCodes')->name('productcodes');
