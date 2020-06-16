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
| is assigned the "api" middleware group. Enjoy building y.our API!
|
*/
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('logout', 'AuthController@logout');
    Route::get('profile', 'AuthController@getProfiles')->name('get.profile.user');
    Route::get('user', 'AuthController@user');
    Route::get('/shoes/index', 'ShoesController@index')->name('get.all.males.shoes.sizes');

});

