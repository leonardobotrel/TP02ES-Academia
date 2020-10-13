@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Planos')

@section('content_header')
<h1>Planos <a href="{{route ('modalidades.criar')}}" class = "btn btn-dark">Adicionar</a></h1>
@endsection


@section('content')
<div class="card-body">
    <div class="card-header">

    <form action="{{route('modalidade.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Nome"class="form-control">
        </div>
            <button type="submit" class="btn btn-dark" >Modalidade</button>
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
                @foreach ($modalidades as $modalidade)
                <tr>
                    <td>{{$modalidade->Nome}}</td>
                    <td> {{$modalidade->Capacidade}} X</td>
      
                    <td><a href="{{route('modalidade.detalhe',$plano->id)}}" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a></td>
                    
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
