<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::get('inventories/find/{id}', 'InventoriesController@find');
    Route::resource('page', 'Pages', ['except' => ['create', 'edit']]);
    Route::resource('news', 'News', ['except' => ['create', 'edit']]);
    Route::post('page/categories', 'Pages@categories');

    Route::group(['middleware' => 'auth:api'], static function () {
        Route::resource('inventories', 'InventoriesController', ['except' => ['create', 'edit']]);
        Route::post('inventories/last', 'InventoriesController@findLast');
        Route::resource('proposals', 'ProposalsController', ['except' => ['create', 'edit']]);
        Route::post('proposals/last', 'ProposalsController@findLast');

    });
});

Route::group([
    'prefix' => 'v1/auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('registration', 'AuthController@registration');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
