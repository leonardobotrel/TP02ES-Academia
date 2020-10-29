@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Ficha Médica')

@section('content_header')
@endsection


@section('content')
<h1>Exame Físico</h1> 
<a href="{{route ('aptidao.cadastro')}}" class = "btn btn-dark">Cadastrar Exame</a>

<div class="card-body">
    <div class="card-header">
        <form action="{{route('aptidao.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
            <div class="form-group">
                <input type="text" name="filter" placeholder="Nome"class="form-control">
            </div>
            <button type="submit" class="btn btn-dark" >Pesquisar exame</button>
        </form> 
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Peso (kg)</th>
                    <th>Altura (m)</th>
                    <th>Pressão Arterial</th>
                    <th>Percentual de Gordura</th>
                    <th>Percentual Massa Magra</th>
                    <th>IMC</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($AptidaoFisica as $aptidao)
                <tr>
                    <td>{{$aptidao->usuario->name}}</td>
                    <td>{{$aptidao->peso}}</td>
                    <td>{{$aptidao->altura}}</td>
                    <td>{{$aptidao->pressao}}</td>
                    <td>{{$aptidao->gordura}}</td>
                    <td>{{$aptidao->massaMagra}}</td>
                    <td>{{$aptidao->imc}}</td>
                    <td>{{$aptidao->habilitado}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>  
<!--  <div class="card-footer"></div> -->
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
