@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Ficha Médica')

@section('content_header')
@endsection


@section('content')
<h1>Exame Físico</h1> 
<!--<a href="" class = "btn btn-dark">Adicionar Novo Plano</a>-->

<div class="card-body">
    <!--<div class="card-header">
        <form action=""method = "POST" class="form form-inline">
            @csrf
            <div class="form-group">
                <input type="text" name="filter" placeholder="Nome"class="form-control">
            </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Plano</button>
        </form> 
    </div>-->
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Peso (kg)</th>
                    <th>Altura (m)</th>
                    <th>Preção Arterial</th>
                    <th>Percentual de Gordura</th>
                    <th>Percentual Massa Magra</th>
                    <th>IMC</th>
                    <th>Situação</th>
                </tr>
            </thead>
            
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
