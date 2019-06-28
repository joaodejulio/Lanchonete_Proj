@extends('pages.layouts.padrao')

  @section('content')
     
    <div id="carrouselInd" class="carousel slide carousel-fade " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/1.png')}}" alt="carrousel index" width="1350" height="520">
            <div class="carousel-caption">
              <span>Bem vindo à</span>
              <h1 class="font-weight-bold text-warning" >Lanchonete X-Tudo!</h1>
              <span>Faça seu pedido online!</span>
            </div>   
          </div>
        </div>
    </div>

@stop





