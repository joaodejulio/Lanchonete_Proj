@extends('pages.layouts.padrao')
@section('content')
<h1>Cardapio</h1>
    <div class="container">
   	<div class="row">
     @foreach($produtos as $produto)
      @php
        @endphp
     	<div class="col-md-4">
     		<img src="{{asset('images/'.$produto['img'])}}" alt="">
     		<h3>{{$produto['nome']}}</h3>
     		<span>{{$produto['descricao']}}</span>
     		<p>{{$produto['valor']}}</p>
     	</div>
       @endforeach
     </div>
  </div>
@stop