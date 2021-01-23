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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Auth'], function () {
    Route::post('/register', 'RegisterController@register');
    Route::post('/login', 'LoginController@login');
});
Route::get('/test', 'HomeController@test');

Route::middleware('auth:api')->group( function () {
    Route::get('/home', 'HomeController@index');
    Route::post('/logout', 'Auth\LoginController@logout');
});
