@extends('pages.layouts.padrao')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('endereco.index') }}">Endereços</a></li>
    <li class="breadcrumb-item active" aria-current="page">Novo Endereço</li>
  </ol>
</nav>

<form action="{{ route('endereco.store') }}" method="POST">
    @include('pages.endereco.form')
</form>

@endsection