<h1>Formulário de Cadastro de Produto</h1>
<hr>
<form method="post" action="/produtos/salvar">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="">Nome:</label>
        <input class="form-control" type="text" name="nome" value="{{$produto->nome}}">
    </div>

    <div class="form-group">
        <label for="">Quantidade</label>
        <input class="form-control" type="number" name="quantidade">
    </div>

    <div class="form-group">
        <label for="valor">Valor Unitário:</label>
        <input class="form-control" type="number" name="valor">
    </div>

    <div class="form-group">
        <label for="altura">Altura:</label>
        <input class="form-control" name="altura">
    </div>

    <div class="form-group">
        <label for="largura">Largura:</label>
        <input class="form-control" name="largura">
    </div>
    <div class="form-group">
        <label for="profundidade">Profundidade:</label>
        <input class="form-control" name="profundidade">
    </div>
    <div class="form-group">
        <label for="peso">Peso:</label>
        <input class="form-control" name="peso">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
        <a class="btn btn-danger" href="/produtos">Cancelar</a>
    </div>
</form>
