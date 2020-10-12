@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo Plano')
@section('content_header')
<h1>Detalhes do Plano {{$plano->name}}</h1>

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{$plano->Nome}}
            </li>
            
            <li>
                <strong>Url:</strong>{{$plano->url}}
            </li>
            
            <li>
                <strong>Frequencia:</strong>{{$plano->Frequencia}}
            </li>
            
            <li>
                <strong>Preco:</strong> R$ {{number_format($plano->preco,2,',','.')}}
            </li>
            
            <li>
                <strong>Periodo:</strong>{{$plano->Periodo}}
            </li>
            <li>
                <strong>Descricao:</strong>{{$plano->descricao}}
            </li>
        </ul>
    <form action="{{route('planos.deletar' ,$plano->id)}}" method="POST" >
        @csrf
            @method('DELETE')
            <button type="submit" class="btn btn -danger">Deletar o Plano      {{$plano->Nome}}      </button>
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
