<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sun Flower</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <base content="{{url('/')}}"  id="base" target="_self">


    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Styles -->
    <link href="{{asset('bootstrap-4.1.3/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('bootstrap-4.1.3/css/tema/agency.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/css/onOff.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/css/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/css/sideBar.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap-4.1.3/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    {{--<link href="{{asset('bootstrap-4.1.3/css/summernote.css')}}" rel="stylesheet">--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
</head>
<body id="page-top">
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-link jonas">
                <i class="fas fa-align-justify fa-2x"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Cantinho do Girassol</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-1x"></i>
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> <!-- NavBar -->
    <div id="content"> <!-- Page Content  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>{{ucfirst( Auth::user()->name )}}</h3>
            </div>
            <ul class="list-unstyled components">
                <p>{{ucfirst(strtolower(auth()->user()->PERFIL))}}</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuários</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{route('usuarios.index')}}">Listar</a>
                        </li>
                        <li>
                            <a href="{{route('usuarios.create')}}">Adicionar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postagens</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{route('postagens.create')}}">Nova postagem</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{url('/')}}" class="download">Site Principal</a>
                </li>
                <li>
                    <a href="" class="article">Postagens</a>
                </li>
            </ul>
        </nav> <!-- Sidebar  -->
        @yield('content')
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/jquery.min.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/bootstrap.bundle.min.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/vendor/jquery-easing/jquery.easing.min.js')}}" defer></script>

<script type="text/javascript" src="{{asset('js/DataTables/jquery.dataTables.min.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/DataTables/dataTables.bootstrap4.min.js')}}" defer></script>

<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/popover.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/concat.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/sidebar.js')}}" defer></script>

<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/summernote.js')}}" defer></script>
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js" defer></script>--}}

<!-- Contact form JavaScript -->
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/tema/jqBootstrapValidation.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/tema/contact_me.js')}}" defer></script>

<!-- Custom scripts for this template -->
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/tema/agency.min.js')}}" defer></script>

<!-- Scripts que podemos mexer -->
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/sweetalert2.all.min.js')}}" defer></script>
<script type="text/javascript" src="{{asset('Usuario')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/fontawesome.min.js')}}" defer></script>
<script type="text/javascript" src="{{asset('bootstrap-4.1.3/js/buscaCep.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/userDelete.js')}}" defer></script>

</body>
</html>
