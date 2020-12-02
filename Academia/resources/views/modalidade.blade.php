@extends('layouts.app', ['pageSlug' => 'Modalidade'])
@section('title','Modalidade')

@section('content_header')
@endsection


@section('content')
@if (Auth::user()->tipoPessoa == 2)    
<h1>Planos <a href="{{route ('modalidade.criar')}}" class = "btn btn-dark">Adicionar</a></h1>

<h1>Modalidade </h1> <a href="{{route ('modalidade.criar')}}" class = "btn btn-dark">Adicionar Modalidade</a>

<div class="card-body">
    <div class="card-header">

    <form action="{{route('modalidade.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Modalidade 
                
            </button>
         </form>
       
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Capacidade</th>
                  

                </tr>
            </thead>
            <tbody>
                @foreach ($modalidade  as $carro)
                <tr>
                    <td>{{$carro->Nome}}</td>
                    <td> {{$carro->Capacidade}} </td>
             
                    <td><a href="{{route('modalidade.detalhe',$carro->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a></td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</div>  <!--  <div class="card-footer">{{!!$modalidade ?? ''->links()!!}}</div> -->
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
