@extends('layouts.app', ['pageSlug' => 'Turmas'])
@section('title','Turmas')

@section('content_header')
@endsection


@section('content')
@if (Auth::user()->tipoPessoa == 1)
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                    <th>Grupo</th>
                    <th>Nome Exercicios</th>
                    <th>Sessao</th>
                    <th>Repeticao</th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($matricula as $Treino)
            @if ($Treino->id == Auth::user()->id)    
                @foreach ($Treino->turma as $KTurmas)
                  @foreach ($turma as $dado)
                            @if($dado->id==$KTurmas)
                                    <tr>
                                        <td>{{ $dado->id}}</td>
                                        <td>{{ $dado->Dia}}</td>
                                        <td>{{ $dado->Modalidade}}</td>
                               
                                    </tr>
                            @endif
                    @endforeach
                @endforeach                
            @endif
        @endforeach
        </tbody>
    </table>
</div>
@endif
@if (Auth::user()->tipoPessoa == 2)
<h1>Turmas <a href="{{route ('turmas.criar')}}" class = "btn btn-dark">Adicionar Nova Turma</a></h1>

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
                    <th>Capacidade Ocupada</th>
                    <th>Professor</th>
                    <th>Lotada?</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($turma as $Kturma)
                <tr>
                    <td>{{$Kturma->id}}</td>
                    <td>{{$Kturma->Dia}}</td>
                    <td>{{$Kturma->Modalidade}} </td>
                    <td>{{$Kturma->Horario_Inicio}}</td>
                    <td>{{$Kturma->Horario_Fim}}</td>
                    <td>{{$Kturma->QtdVagasTotal}}</td>
                    <td>{{$Kturma->vagas_ocupadas}}</td>
                    <td>{{$Kturma->Professor}}</td>
                    <td>{{$Kturma->Disponivel}}</td>                    
                </tr>
                    
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
