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

Route::group(['middleware' => 'auth.api'], function () {

    Route::get('/user', 'API\UserAPIController@list');
    Route::get('/user/sales', 'API\UserAPIController@listSales');
    Route::get('/user/admin', 'API\UserAPIController@listAdmin');
    Route::get('/user/{id}', 'API\UserAPIController@getById');
    Route::post('/user', 'API\UserAPIController@create');
    Route::put('/user', 'API\UserAPIController@update');
    Route::delete('/user/{id}', 'API\UserAPIController@delete');

    Route::get('/barang', 'API\BarangAPIController@list');
    Route::get('/barang/{id}', 'API\BarangAPIController@getById');
    Route::post('/barang', 'API\BarangAPIController@create');
    Route::put('/barang', 'API\BarangAPIController@update');
    Route::delete('/barang/{id}', 'API\BarangAPIController@delete');

    Route::get('/outlet', 'API\OutletAPIController@list');
    Route::get('/outlet/{id}', 'API\OutletAPIController@getById');
    Route::post('/outlet', 'API\OutletAPIController@create');
    Route::put('/outlet', 'API\OutletAPIController@update');
    Route::delete('/outlet/{id}', 'API\OutletAPIController@delete');

    Route::get('/survey', 'API\SurveyAPIController@list');
    Route::get('/survey/name/{name}', 'API\SurveyAPIController@listByName');
    Route::get('/survey/{id}', 'API\SurveyAPIController@getById');
    Route::post('/survey', 'API\SurveyAPIController@create');
    Route::put('/survey', 'API\SurveyAPIController@update');
    Route::delete('/survey/{id}', 'API\SurveyAPIController@delete');
});
