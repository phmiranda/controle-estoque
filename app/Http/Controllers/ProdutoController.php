<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests;
use Estoque\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Estoque\Http\Requests\ProdutoFormRequest;
use Estoque\Produto;


class ProdutoController extends Controller {
    public function index(){
        $produtos = Produto::all();
        return view('produtos.produtos')->with('produtos', $produtos);
        //return response()->json($produtos);
    }

    public function store(){
        $produto = Produto::create(Request::all());
        $produto->save();
        return redirect()->action('ProdutoController@index')->withInput(Request::only('nome'));
    }

    public function create(){
        return view('produtos.formulario');
    }

    public function update($id){
        $produto = Produto::find($id);
        return response()->json($produto, 200);
    }

    public function show($id){
        $produto = Produto::find($id);
        if (empty($produto)){
            return "<p class='text-danger'>Não foi possível encontrar o produto !!!</p>";
        }
        return view('produtos.visualizar')->with('produto', $produto);
    }

    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@index');
    }
}
