@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Ficha Médica')
@section('content_header')
@endsection
@section('content')
<h1>Exame Físico</h1> 
@if (Auth::user()->tipoPessoa == 1)
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Peso (kg)</th>
                <th>Altura (m)</th>
                <th>Pressão Arterial</th>
                <th>Percentual de Gordura (%)</th>
                <th>Percentual Massa Magra (%)</th>
                <th>IMC</th>
                <th>Situacao IMC</th>
                <th>Situação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AptidaoFisica as $aptidao)
                @if ($aptidao->usuario->id == Auth::user()->id)
                <tr>
                    <td>{{$aptidao->usuario->name}}</td>
                    <td>{{$aptidao->peso}}</td>
                    <td>{{$aptidao->altura}}</td>
                    <td>{{$aptidao->pressao}}</td>
                    <td>{{$aptidao->gordura}}</td>
                    <td>{{$aptidao->massaMagra}}</td>
                    <td>{{$aptidao->imc}}</td>
                    <td>{{$aptidao->Situacao}}</td>
                    <td>
                        @if($aptidao->habilitado == 1)
                            {{$aptidao->habilitado = 'Não habilitado'}}
                        @endif
                        @if($aptidao->habilitado == 2)
                            {{$aptidao->habilitado = 'Habilitado'}}
                        @endif
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endif

@if (Auth::user()->tipoPessoa == 2)    
<a href="{{route ('aptidao.cadastro')}}" class = "btn btn-dark">Cadastrar Exame</a>

<div class="card-body">
    <div class="card-header">
        <form action="{{route('aptidao.pesquisa')}}"method = "POST" class="form form-inline">
            @csrf
            <div class="form-group">
                <select name="filter" list="nomes" class="form-control" placeholder="Nome" style="color: black" required>
                @foreach ($AptidaoFisica as $aptidao)
                    <option value="{{$aptidao->user}}" style="background-color: #BA55D3">{{$aptidao->usuario->name}}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark" >Pesquisar exame</button>
        </form> 
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Peso (kg)</th>
                    <th>Altura (m)</th>
                    <th>Pressão Arterial</th>
                    <th>Percentual de Gordura (%)</th>
                    <th>Percentual Massa Magra (%)</th>
                    <th>IMC</th>
                    <th>Situação</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($AptidaoFisica as $aptidao)
                <tr>
                    <td>{{$aptidao->usuario->name}}</td>
                    <td>{{$aptidao->peso}}</td>
                    <td>{{$aptidao->altura}}</td>
                    <td>{{$aptidao->pressao}}</td>
                    <td>{{$aptidao->gordura}}</td>
                    <td>{{$aptidao->massaMagra}}</td>
                    <td>{{$aptidao->imc}}</td>
                    <td>
                        @if($aptidao->habilitado == 1)
                            {{$aptidao->habilitado = 'Não habilitado'}}
                        @endif
                        @if($aptidao->habilitado == 2)
                            {{$aptidao->habilitado = 'Habilitado'}}
                        @endif
                    </td>
                    <form action="{{route('aptidao.deletar' ,$aptidao->id)}}" method="POST" >
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
