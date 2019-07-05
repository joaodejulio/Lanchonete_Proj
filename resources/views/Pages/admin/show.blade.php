@extends('pages.admin.padrao')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.cardapio') }}">Produtos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Informações do Produto</li>
  </ol>
</nav>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <img src="{{asset('storage/images/'.$produtos['img'])}}" class="rounded img-fluid" width="220" height="200" alt="">
        </br>
            <strong>Produto:</strong>
            {{ $produtos->nome }}
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição:</strong>
            {{ $produtos->descricao }}
        </div>
        <a href="/editacardapio/{{$produtos->id_produto}}/edit" class="btn btn-primary">Editar</a>
    </div>
</div>

@endsection