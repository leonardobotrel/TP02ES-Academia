@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo matricula')
@section('content_header')
<h1>Detalhes da Matricula {{$matricula->Nome}}</h1>
<h1>Realizar Matriculas</h1> <a href="{{route ('matriculas.create')}}" class = "btn btn-dark">Adicionar Matricula</a>

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{$matricula->Nome}}
            </li>
            
            <li>
                <strong>ID:</strong>{{$matricula->id}}
            </li>
            
            <li>
                <strong>RG:</strong>{{$matricula->RG}}
            </li>
            
              
            <li>
                <strong>Email:</strong>{{$matricula->Email}}
            </li>
            
              
            <li>
                <strong>Telefone:</strong>{{$matricula->Telefone}}
            </li>
            
            <li>
                <strong>CPF:</strong>{{$matricula->CPF}}
            </li>
            <li>
                <strong>Id Exame:</strong>{{$matricula->idExame}}
            </li>
            <li>
                <strong>Data de Nasciment:</strong>{{$matricula->Data_Nascimento}}
            </li>
            <li>
                <strong>NUmero Cartao:</strong>{{$matricula->Numero_Cartao}}
            </li>
            <li>
                <strong>Bandeirao Cartao:</strong>{{$matricula->bandeira}}
            </li>
            <li>
                <strong>Nome Dono Cartao:</strong>{{$matricula->Nome_Dono_Cartao}}
            </li>
        </ul>
    <form action="{{route('matriculas.destroy' ,$matricula->id)}}" method="POST" >
        @csrf
            @method('DELETE')
            <button type="submit" class="btn btn -danger">Deletar o matricula      {{$matricula->Nome}}      </button>
        </form>
    </div>
    <form action="{{route('treino.cadastro' ,$matricula->id)}}" method="POST" >
        @csrf
            
            <button type="submit" class="btn btn -danger">Criar Treino de Musculacao para     {{$matricula->Nome}}      </button>
        </form>
    </div>
    <div>
        Powered By Marcos & Leonardo . Move yourself!
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
