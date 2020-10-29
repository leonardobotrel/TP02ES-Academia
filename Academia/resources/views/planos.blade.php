@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Planos')

@section('content_header')
@endsection


@section('content')
<h1>Planos </h1> <a href="{{route ('planos.criar')}}" class = "btn btn-dark">Adicionar Novo Plano</a>

<div class="card-body">
    <div class="card-header">

    <form action="{{route('planos.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Plano</button>
         </form>
       
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Frequencia</th>
                    <th>Descricao</th>
                    <th>Preco</th>
                    <th>Periodo</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planos as $carro)
                <tr>
                    <td>{{$carro->Nome}}</td>
                    <td> {{$carro->Frequencia}} X</td>
                    <td>{{$carro->descricao}}</td>
                    <td>R$ : {{$carro->preco}}</td>
                    <td>{{$carro->Periodo}}</td>
                    <td><a href="{{route('planos.detalhe',$carro->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a></td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</div>  <!--  <div class="card-footer">{{!!$planos->links()!!}}</div> -->
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
