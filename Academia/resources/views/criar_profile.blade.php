@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo Perfil')
@section('content_header')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
          <form action="{{route('profiles.store')}}" class="form" method='POST'>
                @csrf
                <div class="form-group">
                    <label >Nome:</label>
                    <input type="text" name="Nome" class="form-control" placeholder="Nome:">
                </div>
        
                <div class="form-group">
                    <label >Descricao:</label>
                    <input type="text" name="descricao" class="form-control" placeholder="Descricao:">
                </div> 
                <div class="form-group">
                <button type= "submit" class ="btn btn-dark"> Criar Perfil</button>
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
