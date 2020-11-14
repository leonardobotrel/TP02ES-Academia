@extends('layouts.app')

@section('content_header')
<ol class="class-breadcrumb">
    <li class="bredcrumb-item ">             <a href="{{route('planos.index')}}">Planos</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('turma.index')}}">Turmas</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('profiles.index')}}">Perfis </a>             </li>

</ol>
@stop
@section('content')
    <style>
        body {
            position: relative;
        }
        body::before {    
            content: "";
            background-image: url("{{ asset('black') }}/img/FITNESS(17).png");
            background-size: cover;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.2;
        }
    </style>

    <body>
        
		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			            	<li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          HOME
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="inicio">O Inicio</a>
                              
							    </div>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="sobre">Sobre</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="modalidades">Modalidades</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="equipe">Equipe</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="galeria">Galeria de Fotos</a>
			                </li>
			              
			                <li class="nav-item">
			                    <a class="nav-link" href="contato">Contato</a>
			                </li>

			            </ul>
			            <div class="sosmed-icon float-center d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
						</div>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>
        <div class="header py-7 py-lg-8" >
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">{{ __('PROPOSITUS!') }}</h1>
                            <p class="text-lead text-light">
                                {{ __('De um novo sentido a sua vida.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
