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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
});


Route::group(['prefix' => '/admin', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::get('proposals/find_for_pdf/{id}', 'ProposalsController@findForPDF');
});



