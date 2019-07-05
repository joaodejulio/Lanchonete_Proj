@extends('pages.admin.padrao')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('pedidocontrole') }}">Pedidos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Informações do Pedido</li>
  </ol>
</nav>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Pedido:</strong>
            
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Usuario:</strong>
            
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            
        </div>
       
    </div>
</div>

@endsection