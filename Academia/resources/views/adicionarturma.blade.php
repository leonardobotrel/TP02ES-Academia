@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','matriculas')

@section('content_header')
@endsection


@section('content') <!-- 
<h1>Matriculas  Retirar esse botao e colocar na lista de msotra usuarios</h1> <a href="{{route ('matriculas.create')}}" class = "btn btn-dark">Adicionar Matricula</a>

<div class="card-body">
    <div class="card-header">

   <form action="{{route('matriculas.search')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
           <button type="submit" class="btn btn-dark" >Pesquisar Usuario</button> 
         </form>
      
    </div> -->
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Nome</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matricula as $matricula)
         
            
                 <tr>
               
                    <td>{{$matricula->id}}</td>
                    <td>{{$matricula->Nome}}</td>
                    <td><a href="{{route('matriculas.create',$matricula->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Adicionar Turmas</a></td>
                    
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
