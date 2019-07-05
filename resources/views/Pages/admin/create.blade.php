@extends('pages.admin.padrao')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.cardapio') }}">Produtos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Novo Produto</li>
  </ol>
</nav>

<form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
    @include('pages.admin.form')
</form>

@endsection