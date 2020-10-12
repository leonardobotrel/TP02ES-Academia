@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo Plano')
@section('content_header')
<h1>Cadastrar novo Planos <a href="{{route ('planos.salvar')}}" class = "btn btn-dark">Adicionar</a></h1>

@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('planos.salvar')}}" class="form" method='POST'>
            @csrf
            <div class="form-group">
                <label >Nome:</label>
                <input type="text" name="Nome" class="form-control" placeholder="Nome:">
            </div>
            <div class="form-group">
                <label >Frequencia:</label>
                <input type="text" name="Frequencia" class="form-control" placeholder="Frequencia:">
            </div>
            <div class="form-group">
                <label >Preco:</label>
                <input type="double" name="preco" class="form-control" placeholder="Preco:">
            </div>
            <div class="form-group">
                <label >Periodo:</label>
                <input type="integer" name="Periodo" class="form-control" placeholder="Periodo:">
            </div>
            <div class="form-group">
                <label >Descricao:</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descricao:">
            </div> 
            <div class="form-group">
               <button type= "submit" class ="btn btn-dark"> Salvar</button>
        </form>
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
