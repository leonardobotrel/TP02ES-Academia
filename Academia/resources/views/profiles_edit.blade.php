@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Editar o Perfil { $profile->Nome} }')

@section('content_header')
<h1>Editar o Perfil{{ $profile->Nome }}</h1>
@endsection


@section('content')
<div class="card">
    <div class="card-body">

   <form action="{{route('profiles.update',$profile->id)  }}" class="form" method="POST">
    @method('PUT')
    <div class="form-group">
        <label >Nome:</label>
        <input type="text" name="Nome" class="form-control" placeholder="Nome:">
    </div>

    <div class="form-group">
        <label >Descricao:</label>
        <input type="text" name="descricao" class="form-control" placeholder="Descricao:">
    </div> 
    <div class="form-group">
    <button type= "submit" class ="btn btn-dark"> Salvar Perfil</button>
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
