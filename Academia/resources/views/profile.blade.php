@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Profile')


@section('content_header')
<ol class="class-breadcrumb">
    <li class="bredcrumb-item ">             <a href="{{route('planos.index')}}">Planos</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('turma.index')}}">Turmas</a>             </li>
    <li class="bredcrumb-item ">             <a href="{{route('profiles.index')}}">Perfis </a>             </li>
    
</ol>
<h1>Perfis <a href="{{route ('profiles.create')}}" class = "btn btn-dark">Adicionar Perfil</a></h1>

@stop

@section('content_header')
@endsection


@section('content')
<div class="card-body">
    <div class="card-header">

    <form action="{{route('planos.index')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Perfil</button>
         </form>
       
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profile as $profile)
                <tr>
                    <td>{{$profile->Nome}}</td>
                 
                    <td style="width=10px;">
                        
                        <a href="{{route('planos.detalhe',$profile->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a>
                        <a href="{{route('profiles.edit',$profile->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Editar</a>
                    </td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
