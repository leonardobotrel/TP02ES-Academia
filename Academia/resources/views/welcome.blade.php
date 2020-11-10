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
