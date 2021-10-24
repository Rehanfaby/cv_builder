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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/cv'], function () {


Route::get('/create', 'HomeController@create')->name('create');
Route::post('/create', 'HomeController@store')->name('cv.create');
Route::get('/record/{id}', 'HomeController@record')->name('cv.record');
Route::get('/pdf/{id}', 'HomeController@pdf')->name('cv.pdf');

});
