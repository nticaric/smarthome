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

Route::get('/', 'HomeController@temperature');
Route::get('/temperature', function () {
    return App\Temperature::all();
});

Route::post('temperature', function () {
    $temp              = new App\Temperature;
    $temp->temperature = request()->get('temperature');
    $temp->save();
});
