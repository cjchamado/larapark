<?php

Route::group(['prefix' => 'cliente'], function(){

    Route::get('/', [
        'uses' => 'ClienteController@index',
        'as' => 'cliente_index'
    ]);

    Route::match(['get','post'], '/create', [
        'uses' => 'ClienteController@create',
        'as' => 'cliente_create'
    ]);

    Route::match(['get','post'], '/{id}', [
        'uses' => 'ClienteController@update',
        'as' => 'cliente_update'
    ])->where('id','[0-9]+');
});



/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sb-admin/{page?}',[
    'uses' => 'SBAdminController@index',
    'as' => 'sb_admin'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
