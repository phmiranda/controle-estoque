@extends('layout.principal')
@section('conteudo')
    <div class="col-md-6 col-md-offset-3">
        <h1>Formulário de Cadastro de Produto</h1>
        <hr>


        <form method="post" action="/produtos/store">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="">Nome:</label>
                <input class="form-control" type="text" name="nome">
            </div>

            <div class="form-group">
                <label for="">Quantidade</label>
                <input class="form-control" type="text" name="quantidade">
            </div>

            <div class="form-group">
                <label for="valor">Valor Unitário:</label>
                <input class="form-control" type="text" name="valor">
            </div>

            <div class="form-group">
                <label for="altura">Altura:</label>
                <input class="form-control" type="text" name="altura">
            </div>

            <div class="form-group">
                <label for="largura">Largura:</label>
                <input class="form-control" type="text" name="largura">
            </div>
            <div class="form-group">
                <label for="profundidade">Profundidade:</label>
                <input class="form-control" type="text" name="profundidade">
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input class="form-control" type="text" name="peso">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" name="descricao"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
@stop
