@extends('pages.layouts.padrao')
@section('content')
<h1>Cardapio</h1>
    <div class="container">
   	<div class="row">
     @foreach($produtos as $produto)
     
     	<div class="col-md-4">
     		<img src="{{asset('storage/images/'.$produto['img'])}}" class="rounded img-fluid" width="220" height="200" alt="">
         <h3 >{{$produto['nome']}} </h3> 
       {{-- <button onclick="{{route('carrinho.index')}}"  type="button" class="btn btn-success" name="btn_adicionar">Adicionar</button> --}}
         <span>{{$produto['descricao']}}</span>
     		<p>{{$produto['valor']}}</p>
     	</div>
       @endforeach
     </div>
  </div>


  <script>
      $(document).on('click','.btn-adicionar',function(){
        $('.container').append('<h1>oi<h1>');
  
      }
        
    </script>
 
@stop