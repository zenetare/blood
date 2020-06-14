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


Route::group(['middleware' => 'admin'], function() {
/* pages blood */

Route::get('/adminPanel', 'Admin\bloodController@index');
Route::get('/adminPanel/blood/create', 'Admin\bloodController@create');
Route::post('/adminPanel/blood/create', 'Admin\bloodController@store');
Route::get('/adminPanel/blood/{id}/edit', 'Admin\bloodController@edit');
Route::post('/adminPanel/blood/{id}/edit', 'Admin\bloodController@update');
Route::get('/adminPanel/blood/{id}/destory', 'Admin\bloodController@destroy');

/* pages country */

Route::get('/adminPanel/country', 'Admin\countryController@index');
Route::get('/adminPanel/country/create', 'Admin\countryController@create');
Route::post('/adminPanel/country/create', 'Admin\countryController@store');
Route::get('/adminPanel/country/{id}/edit', 'Admin\countryController@edit');
Route::post('/adminPanel/country/{id}/edit', 'Admin\countryController@update');
 

/* pages city */

Route::get('/adminPanel/{id}/city', 'Admin\cityController@index');
Route::get('/adminPanel/{id}/city/create', 'Admin\cityController@create');
Route::post('/adminPanel/{id}/city/create', 'Admin\cityController@store');
Route::get('/adminPanel/{id}/city/edit', 'Admin\cityController@edit');
Route::post('/adminPanel/{id}/city/edit', 'Admin\cityController@update');

/* json city */

Route::post('adminPanel/city', 'cityJson@index');

/* page profil */

Route::get('adminPanel/profil', function() {

    return view('webadmin.pages.profile.index');

});
Route::post('adminPanel/profil', 'Admin\profilController@index');
Route::post('adminPanel/profil/pass', 'Admin\profilController@editPass');
Route::get('adminPanel/logout', 'Admin\profilController@logout');


});

/* pages web home */

Route::get('/', 'homeConroller@index');
Route::get('/adduser', 'homeConroller@add');
Route::get('/adduser/add', 'homeConroller@create');

/* json blood */

Route::get('adminPanel/blood', 'homeConroller@blood');



Route::group(['middleware' => 'logout'], function() {

    Route::get('adminPanel/login', function () {
        return view('webadmin.pages.login.index');
    });
    Route::post('adminPanel/login', 'Admin\loginController@loginAdmin');
});

Route::get('adminPanel/city/home', 'cityJson@index');


