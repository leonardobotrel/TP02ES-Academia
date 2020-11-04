@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Ficha de treino')
@section('content_header')
@endsection
@section('content')
<h1>Ficha de treino</h1> 
@if (Auth::user()->tipoPessoa == 1)
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Peito</th>
                <th>Bíceps</th>
                <th>Tríceps</th>
                <th>Costas</th>
                <th>Ombros</th>
                <th>Glúteos</th>
                <th>Pernas</th>
                <th>Panturrilhas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Treinos as $treino)
                @if ($treino->usuario->id == Auth::user()->id)
                <tr>
                    <td>{{$treino->peito}}</td>
                    <td>{{$treino->biceps}}</td>
                    <td>{{$treino->triceps}}</td>
                    <td>{{$treino->costas}}</td>
                    <td>{{$treino->ombros}}</td>
                    <td>{{$treino->gluteos}}</td>
                    <td>{{$treino->pernas}}</td>
                    <td>{{$treino->panturrilhas}}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endif

@if (Auth::user()->tipoPessoa == 2)    
<a href="{{route ('treino.cadastro')}}" class = "btn btn-dark">Cadastrar Ficha</a>

<div class="card-body">
    <div class="card-header">
        <form action="{{route('treino.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
            <div class="form-group">
                <select name="filter" list="nomes" class="form-control" placeholder="Nome" style="color: black" required>
                @foreach ($Treinos as $treino)
                    <option value="{{$treino->user}}" style="background-color: #BA55D3">{{$treino->usuario->name}}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark" >Pesquisar Ficha</button>
        </form> 
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Peito</th>
                    <th>Bíceps</th>
                    <th>Tríceps</th>
                    <th>Costas</th>
                    <th>Ombros</th>
                    <th>Glúteos</th>
                    <th>Pernas</th>
                    <th>Panturrilhas</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($AptidaoFisica as $aptidao)
                <tr>
                    <td>{{$treino->usuario->name}}</td>
                    <td>{{$treino->peito}}</td>
                    <td>{{$treino->biceps}}</td>
                    <td>{{$treino->triceps}}</td>
                    <td>{{$treino->costas}}</td>
                    <td>{{$treino->ombros}}</td>
                    <td>{{$treino->gluteos}}</td>
                    <td>{{$treino->pernas}}</td>
                    <td>{{$treino->panturrilhas}}</td>
                    <form action="{{route('treino.deletar' ,$treino->id)}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn -danger tim-icons icon-simple-remove"></button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>  
@endif
<!--  <div class="card-footer"></div> -->
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
