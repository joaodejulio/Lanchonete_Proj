@extends('pages.layouts.padrao')
@section('content')
<h1>Caixa</h1>
    <div class="container">
      <form method="post" action="{{url('caixa')}}">
   	<div class="row">
      @csrf
     <div class="col-md-6">
       <label>Úsuario</label>
       <select class="form-control" name = "usuario">
        @foreach($users as $user)
        @php
        @endphp
        <option value="{{$user['id']}}">
         <span>{{$user['name']}}</span>
        </option>
        @endforeach
       </select>
      <label>Quantidade do produto</label>
      <input class="form-control" type="text" id="quantidade_produto" name="quantidade_produto">
      <label>Produto</label>
       <select class="form-control" id="produto" name ="produto">
        @foreach($produtos as $produto)
        @php
        @endphp
        <option value ="{{$produto['id_produto']}}" data-nome="{{$produto['nome']}}" data-valor="{{$produto['valor']}}">
         <span>{{$produto['nome']}} - {{$produto['valor']}}</span>
        </option>
        @endforeach
       </select>
       <button style="margin-top: 10px;" type="button" class="btn btn-success btn-adicionar">ADICIONAR</button>
     </div> 
     <div class="col-md-6">
       <table class="select-produtos">
         <thead>
           <tr>
             <th>Codigo</th>
             <th>Nome</th>
             <th>Quantidade</th>
             <th>Valor</th>
             <th>Opções</th>
           </tr>
         </thead>
         <tbody class="tbody-produtos">

         </tbody>
       </table>
     </div> 
    </div>

    <label>Valor Total</label>
    <input class="form-control" type="text" id="valor_total" name="valor_total" readonly>
    <input type="submit" value="GRAVAR" class="btn btn-success" name="enviar_pedido">
    </form>
          
        </div>
    </div>
  </div>
  <script>
    $(document).on('click','.btn-adicionar',function(){
      $('.tbody-produtos').append(
        '<tr>\
        <input type="hidden" name="produto_id[]" value="'+$('#produto').val()+'">\
        <input type="hidden" class="quantidade" name="quantidade[]" value="'+$('#quantidade_produto').val()+'">\
        <input type="hidden" class="valor" value="'+$('#produto option:selected').data('valor')+'">\
        <td>'+$('#produto').val()+'</td>\
        <td>'+$('#produto option:selected').data('nome')+'</td>\
        <td>'+$('#quantidade_produto').val()+'</td>\
        <td>'+$('#produto option:selected').data('valor')+'</td>\
        <td><button class="btn btn-danger btn-sm btn-remover">EXCLUIR</td>\
        </tr>');
      soma();
    });
    $(document).on('click','.btn-remover',function(){
      $(this).parents('tr').remove();
      });
    function soma(){
      var valor_total = 0;
      $.each($('.valor'), function(index, val){
          valor_total = valor_total+($(this).val()*$(this).parents('tr').find('input.quantidade').val());
      });
      $('#valor_total').val(valor_total);

    }
      
  </script>
@stop