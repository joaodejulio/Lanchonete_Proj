
@extends('pages.layouts.padrao')

@section('content')


@stop













{{-- 




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
          
      </script> --}}