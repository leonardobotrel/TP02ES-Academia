@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','PLanos')
@section('content')
<div class="card-body">
    <div class="card-header">

         
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Frequencia</th>
                    <th>Descricao</th>
                    <th>Preco</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planos as $plano)
                <tr>
                    <td>{{$plano->Nome}}</td>
                    <td>{{$plano->Frequencia}}</td>
                    <td>{{$plano->descricao}}</td>
                    <td>{{$plano->preco}}</td>
                    <td><a href="" class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a></td>
                    
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
