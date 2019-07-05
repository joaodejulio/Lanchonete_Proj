<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name'), '2' }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="author" content="Rafael G., João Pedro, Renan F.">
    <meta name="description" content="Faça seu pedido online! Horário de funcionamento: Terça à Domingo, 17h30 à 00h00">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/0cd9314373.js"></script>
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">    
    <!-- Date Picker -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.css')}}"> -->
    <!-- Gallery Lightbox -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet"> 

    <!-- Style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    
    <!-- Theme color -->
    <link id="switcher" href="{{asset('css/cores.css')}}" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
</head>
    <body>

{{-----------------------NavBar Inicio--------------------------------------------}}

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand img-fluid"> <img class="img-fluid" src="{{asset('images/logo2.png')}}" width="200" height="187"> </a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/editacardapio">Editar Cardápio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pedidocontrole">Controle de Pedidos</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/caixa">Caixa</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/pedido">Pedido</a>
                </li>     --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/carrinho">Carrinho</a>
                </li>     --}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


{{-------------------------------NavBar Inicio------------------------------------}}
        <div class="container-fluid">
            @yield('content')
        </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    </body>

  <footer class="page-footer font-medium blue pt-4 ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="page-footer-area">
                <div class="page-footer-social text-center py-3">
                    <a href="https://www.facebook.com/LanchoneteXTudo/?ref=br_rs"><span class="fab fa-facebook"></span></a>
                    <a href="https://wa.me/5515997422225"><span class="fab fa-whatsapp"></span></a>
                </div>
                <div class="page-footer-copyright text-center py-3">            
                    <p><small>Desenvolvido por
                    <a href="mailto:renanfrancisco.on@gmail.com">João Pedro</a>,
                    <a href="mailto:renanfrancisco.on@gmail.com">Erick</a> e
                    <a href="mailto:renanfrancisco.on@gmail.com">Renan</a>.<br>
                    &copy; Copyright 2018.<a rel="nofollow" href="/politicasprivacidade"> Políticas de Privacidade</a>.<br>
                    <a href={{ route('admin.login') }}>Administrador</a>    
                </small></p>          
                </div>         
            </div>
      </div>
    </div>
    </div>
</footer>
<!-- Footer -->
</html>