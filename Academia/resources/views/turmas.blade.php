@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Planos')

@section('content_header')
<h1>Planos <a href="{{route ('planos.criar')}}" class = "btn btn-dark">Adicionar</a></h1>
@endsection


@section('content')
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
                @foreach ($turma as $turma)
                <tr>
                    <td>{{$turma->Nome}}</td>
                    <td> {{$turma->}} X</td>
                    <td>{{$plano->descricao}}</td>
                    <td>R$ : {{$plano->preco}}</td>
                    <td>{{$plano->Periodo}}</td>
                    <td><a href="{{route('turma.detalhe',$plano->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a></td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</div>  <!--  <div class="card-footer">{{!!$turmas->links()!!}}</div> -->
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
