@extends('pages.layouts.padrao')
@section('content')
<h1>Pedidos</h1>
<div class="row">
	<table class="table-recebido" data-prox_status="1">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>CLIENTE</th>
				<th>PRODUTOS</th>
				<th>OPÇOES</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<table class="table-empreparo" data-prox_status="2">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>CLIENTE</th>
				<th>PRODUTOS</th>
				<th>OPÇOES</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<table class="table-finalizado">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>CLIENTE</th>
				<th>PRODUTOS</th>
				<th>OPÇOES</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
<script>
	timeout();
	var table2 = $('.table-recebido').DataTable(
		{ajax: {url:'/atualizatabelapedidos/'+0,dataSrc:''},
		"language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
              },
        searching: false,
		columns: [
		{data: 'id_pedido'},
		{data: 'name'},
		{data: 'produtos'},
		{data: 'botao'}
		]});
	var table1 = $('.table-empreparo').DataTable(
		{ajax: {url:'/atualizatabelapedidos/'+1,dataSrc:''},
		"language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
              },
        searching: false,
		columns: [
		{data: 'id_pedido'},
		{data: 'name'},
		{data: 'produtos'},
		{data: 'botao'}
		]});
	var table3 =$('.table-finalizado').DataTable(
		{ajax: {url:'/atualizatabelapedidos/'+2,dataSrc:''},
		"language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
              },
        searching: false,
		columns: [
		{data: 'id_pedido'},
		{data: 'name'},
		{data: 'produtos'},
		{data: 'botao'}
		]});
	function timeout() {
    setTimeout(function () {
  		table3.ajax.reload();
  		table1.ajax.reload();
  		table2.ajax.reload();
        timeout();
    }, 20000);

    $(document).on('click','.btn-alterar-status',function(){
    	$.get("/atualizaStatus", {status: $(this).parents('table').data('prox_status'),id_pedido:$(this).data('id')}, function(result){
		    table3.ajax.reload();
  			table1.ajax.reload();
  			table2.ajax.reload();
		 });
    });
}
</script>
@stop