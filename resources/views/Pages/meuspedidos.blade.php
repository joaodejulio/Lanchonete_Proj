@extends('pages.admin.padrao')

@section('content')

<div class="row pb-4">
    <span class="display-4">Meus Pedidos</span>
</div>

<div class="row pt-2">
    <table class="table table-striped">
        <thead>
            <tr>
                <td scope="col">Pedido</td>
                <td scope="col">Itens</td>
                <td scope="col">Valor</td>
                
                
            </tr>
        </thead>
        <tbody>
            
            @foreach($pedidos as $pedido)
           
            <tr>
                    <td><a >{{ $pedido->id_pedido }}</a></td> 
                  > <td>{{ $pedido->nome }}</td>
                    <td>{{ $pedido->valor}}</td>
                                      
                    <td>
                       
                    </td>
                    <td>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection