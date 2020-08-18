@extends('layout.principal')
@section('conteudo')
    <h1>Lista de Produtos</h1>
    <hr />
    @if(old('nome'))
        <div class="alert alert-success text-center">
            <p>O produto {{ old('nome') }} foi cadastrado com sucesso.</p>
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Quantidade no Estoque</th>
                <th class="text-center">Valor Unitário</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        @foreach($produtos as $produto)
            <tbody>
                <tr class="{{$produto->quantidade <= 1 ? 'danger' : ''}}">
                    <td class="text-center">{{ $produto->id }}</td>
                    <td class="text-center">{{ $produto->nome }}</td>
                    <td class="text-center">{{ $produto->quantidade }}</td>
                    <td class="text-center">R$ {{ $produto->valor }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-xs" href="/produtos/show/{{ $produto->id }}">Detalhar</a>
                        <a class="btn btn-warning btn-xs" href="/produtos/update/{{ $produto->id }}">Atualizar</a>
                        <a class="btn btn-danger btn-xs" href="/produtos/destroy/{{ $produto->id }}">Excluir</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@stop
