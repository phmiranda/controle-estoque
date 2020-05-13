@extends('layout.principal')
@section('conteudo')
    <div class="col-md-6 col-md-offset-3">
        <h1>Detalhamento do Produto</h1>
        <hr>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <p>{{ $produto->nome }}</p>
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <p>{{ $produto->quantidade }}</p>
        </div>

        <div class="form-group">
            <label for="valor">Valor Unitário:</label>
            <p>{{ $produto->valor }}</p>
        </div>

        <div class="form-group">
            <label for="altura">Altura:</label>
            <p>{{ $produto->altura }}</p>
        </div>

        <div class="form-group">
            <label for="largura">Largura:</label>
            <p>{{ $produto->largura }}</p>
        </div>
        <div class="form-group">
            <label for="profundidade">Profundidade:</label>
            <p>{{ $produto->profundidade }} </p>
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <p>{{ $produto->peso }}</p>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <p class="text-justify">{{ $produto->descricao }}</p>
        </div>

        <div class="form-group">
            <a class="btn btn-danger btn-block" href="/produtos">Voltar</a>
        </div>
    </div>
@stop
