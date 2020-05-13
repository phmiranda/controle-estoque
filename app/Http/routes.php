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

Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos-rest', 'ProdutoController@indexJson');
Route::post('/produtos/salvar', 'ProdutoController@salvar');
Route::get('/produtos/cadastrar', 'ProdutoController@cadastrar');
Route::get('/produtos/detalhar/{id}', 'ProdutoController@detalhar');
Route::get('/produtos/atualizar/{id}', 'ProdutoController@atualizar');
Route::get('/produtos/deletar/{id}', 'ProdutoController@deletar');
