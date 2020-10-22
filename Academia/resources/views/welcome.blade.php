@extends('layouts.app')

@section('content_header')
<ol class="class-breadcrumb">
    <li class="bredcrumb-item ">             <a href="{{route('planos.index')}}">Planos</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('turma.index')}}">Turmas</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('profiles.index')}}">Perfis </a>             </li>

</ol>
@stop
@section('content')
    <div class="header py-7 py-lg-8">

        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('PROPOSITUS!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Use Black Dashboard theme to create a great project.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
