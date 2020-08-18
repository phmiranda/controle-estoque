<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
    return "Ola Mundo...";
});

Route::group(['prefix' => 'categorias'], function () {
    Route::get('', 'CategoriaController@index');
    Route::get('create', 'CategoriaController@create');
    Route::post('store', 'CategoriaController@store');
    Route::get('update/{id}', 'CategoriaController@update');
    Route::get('destroy/{id}', 'CategoriaController@destroy');
    Route::get('show/{id}', 'CategoriaController@show');
});

Route::group(['prefix' => 'produtos'], function () {
    Route::get('', 'ProdutoController@index');
    Route::get('create', 'ProdutoController@create');
    Route::post('store', 'ProdutoController@store');
    Route::get('update/{id}', 'ProdutoController@update');
    Route::get('destroy/{id}', 'ProdutoController@destroy');
    Route::get('show/{id}', 'ProdutoController@show');
});


Route::group(['prefix' => 'api'], function () {
    Route::get('produtos', 'ProdutoController@indexJson');
});
