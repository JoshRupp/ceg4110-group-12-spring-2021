<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('monster')->group(static function () {
    Route::get('/', 'MonsterController@index')->name('monster.index');
    Route::get('/{id}', 'MonsterController@show')->name('monster.show');
});

Route::prefix('weapon')->group(static function () {
    Route::get('/', 'WeaponController@index')->name('weapon.index');
    Route::get('/{id}', 'WeaponController@show')->name('weapon.show');
});

Route::prefix('item')->group(static function () {
    Route::get('/', 'ItemController@index')->name('item.index');
    Route::get('/{id}', 'ItemController@show')->name('item.show');
});
