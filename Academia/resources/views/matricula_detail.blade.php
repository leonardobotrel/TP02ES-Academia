@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo matricula')
@section('content_header')
<h1>Detalhes da Matricula {{$matricula->Nome}}</h1>

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{$matricula->Nome}}
            </li>
            
            <li>
                <strong>Url:</strong>{{$matricula->id}}
            </li>
            
            <li>
                <strong>Frequencia:</strong>{{$matricula->RG}}
            </li>
            
              
            <li>
                <strong>Frequencia:</strong>{{$matricula->Email}}
            </li>
            
              
            <li>
                <strong>Frequencia:</strong>{{$matricula->Telefone}}
            </li>
            
            <li>
                <strong>Periodo:</strong>{{$matricula->cpf}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$matricula->idExame}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$matricula->Data_Nascimento}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$matricula->Numero_Cartao}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$matricula->Bandeira_cartao}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$matricula->Nome_Dono_Cartao}}
            </li>
        </ul>
    <form action="{{route('planos.destroy' ,$matricula->id)}}" method="POST" >
        @csrf
            @method('DELETE')
            <button type="submit" class="btn btn -danger">Deletar o matricula      {{$matricula->Nome}}      </button>
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
