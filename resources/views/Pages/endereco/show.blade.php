@extends('pages.layouts.padrao')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('endereco.index') }}">Cidades</a></li>
    <li class="breadcrumb-item active" aria-current="page">Informações da Cidade</li>
  </ol>
</nav>

<div class="row">
    <div class="col p-2">
        <fieldset>
            <legend>Informações da Cidade</legend>
            <form onsubmit="event.preventDefault()">
                @include('pages.endereco.form')
            </form>
        </fieldset>
    </div>

    {{-- <div class="col p-2">
        <fieldset>
            <legend>Cidades (total: {{ $endereco->count() }})</legend>
            <ul class="list-group list-group-flush">
                @foreach($endereco as $endereco)
                <li class="list-group-item">{{ $endereco->cidade }}</li>
                @endforeach
            </ul>
        </fieldset>
    </div> --}}
</div>

@endsection