@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Exercicios')


@section('content_header')

@endsection


@section('content')

<h1>Exercicios  <a href="{{route ('exercicios.create')}}" class = "btn btn-dark">Adicionar Exercicio</a></h1>

<div class="card-body">
    <!-- 
    <div class="card-header">

   <form action="{{route('exercicios.index')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Perfil</button>
         </form>
       
    </div>
-->
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sessoes</th>
                    <th>Repeticao</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exercicio as $exercicios)
                <tr>
                    <td>{{$exercicios->Nome_Exercicio}}</td>
                    <td>{{$exercicios->Sessao}}</td>
                    <td>{{$exercicios->Repeticao}}</td>
                    <td style="width=10px;">
                        <a href="{{route('exercicios.edit',$exercicios->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Editar</a>
                    </td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</div> @endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
