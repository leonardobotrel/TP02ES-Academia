@extends('layouts.app', ['pageSlug' => 'Turmas'])
@section('title','Turmas')

@section('content_header')
<h1>Turmas <a href="{{route ('turmas.criar')}}" class = "btn btn-dark">Adicionar Nova Turma</a></h1>
@endsection


@section('content')
<div class="card-body">
       <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Numero da Turma</th>
                    <th>Dia da Semana</th>
                    <th>Modalidade</th>
                    <th>Horario Inicio</th>
                    <th>Horario Fim</th>
                    <th>Capacidade Maxima</th>
                    <th>Professor</th>
                    <th>Lotada?</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($turma as $turma)
                <tr>
                    <td>{{$turma->Turma}}</td>
                    <td>{{$turma->Dia}}</td>
                    <td>{{$turma->Modalidade}} </td>
                    <td>{{$turma->Horario_Inicio}}</td>
                    <td>{{$turma->Horario_Fim}}</td>
                    <td>{{$turma->QtdVagasTotal}}</td>
                    <td>{{$turma->Professor}}</td>
                    <td>{{$turma->Disponivel}}</td>                    
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
