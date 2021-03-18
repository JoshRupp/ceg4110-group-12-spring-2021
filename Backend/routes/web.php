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

Route::prefix('image')->group(static function () {
    Route::get('/svg/{type}/{image}', 'ImageController@svg')->name('image.svg');
    Route::get('/monster/{id}', 'ImageController@monster')->name('image.monster');
    Route::get('/equipment/{name}', 'ImageController@equipment')->name('image.equipment');
    Route::get('/item/{name}', 'ImageController@item')->name('image.item');
});
