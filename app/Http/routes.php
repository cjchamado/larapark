<?php

// Clientes
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

    Route::get('/delete', [
        'uses' => 'ClienteController@delete',
        'as' => 'cliente_delete'
    ]);

    Route::get('/delete/{id}', [
        'uses' => 'ClienteController@delete',
        'as' => 'cliente_delete'
    ]);

});

// Veiculos
Route::group(['prefix' => 'veiculo'], function(){

    Route::get('/', [
        'uses' => 'VeiculoController@index',
        'as' => 'veiculo_index'
    ]);

    Route::match(['get','post'], '/create', [
        'uses' => 'VeiculoController@create',
        'as' => 'veiculo_create'
    ]);

    Route::match(['get','post'], '/{id}', [
        'uses' => 'VeiculoController@update',
        'as' => 'veiculo_update'
    ])->where('id','[0-9]+');

    Route::get('/delete/{id}', [
        'uses' => 'VeiculoController@delete',
        'as' => 'veiculo_delete'
    ]);
});

Route::get('/', function () {
    return view('app.index');
});

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
