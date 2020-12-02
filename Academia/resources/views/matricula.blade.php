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
    @if (Auth::user()->tipoPessoa == 2)
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
                @foreach ($AptidaoFisica as $AptidaoFisica)
         
                 @if($AptidaoFisica->habilitado == "2")
                 <tr>
               
                    <td>{{$AptidaoFisica->id}}</td>
                    <td>{{$AptidaoFisica->name}}</td>
                    <td><a href="{{route('matriculas.create',$AptidaoFisica->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Matricular</a></td>
                    
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endif
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
