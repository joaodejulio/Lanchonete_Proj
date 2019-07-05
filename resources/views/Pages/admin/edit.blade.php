@extends('pages.admin.padrao')
@section('content')
@csrf

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.cardapio') }}">Produtos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar Produto</li>
  </ol>
</nav>
<form action="/editacardapio/{{$produtos->id_produto}}" method="POST">
@method('PUT')
<div class="form-group">
    <label for="cidade">Produto</label>
    <input type="text" 
           class="form-control" 
           id="cidade"
           name="nome"
           value="{{$produtos->nome}}">
</div>

<div class="form-group">
    <label for="descricao">Descricao</label>
    <input type="text" 
            class="form-control" 
            id="descricao"
            name="descricao"
            value="{{$produtos->descricao}}">
</div>


<div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" 
                class="form-control" 
                id="valor"
                name="valor"
                value="{{$produtos->valor}}">
            </div>
            
            <div class="row">
                
                
    <button type="reset" class="btn btn-light mr-2">Limpar campos</button>
    <button type="submit" class="btn btn-success">Enviar</button>
</div>
</form>


@endsection