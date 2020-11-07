@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo modalidade')
@section('content_header')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('matriculas.store')}}" class="form" method='POST'>
            @csrf
            <div class="form-group">
                <label >Nome Completo:</label>
                <input type="text" name="Nome" class="form-control" placeholder="Nome:">
            </div>
            <div class="form-group">
                <label >CPF:</label>
                <input type="integer" name="CPF" class="form-control" placeholder="CPF:">
            </div>
            <div class="form-group">
                <label >Telefone:</label>
                <input type="text" name="Telefone" class="form-control" placeholder="Identidade:">
            </div>
            <div class="form-group">
                <label >Identidade:</label>
                <input type="text" name="RG" class="form-control" placeholder="Identidade:">
            </div>
             <div class="form-group">
                <label >Email:</label>
                <input type="text" name="Email" class="form-control" placeholder="Identidade:">
            </div>
            <div class="form-group">
                <label >Data de Nascimento:</label>
                <input type="date" name="Data_Nascimento" class="form-control" placeholder="Data de Nascimento:">
            </div>
            <div class="form-group">
                <label >Numero do Cartao:</label>
                <input type="text" name="Numero_cartao" class="form-control" placeholder="Descricao:">
            </div> 
            <div class="form-group">
                <label >Nome do Dono do Cartao:</label>
                <input type="text" name="Nome_Dono_Cartao" class="form-control" placeholder="Descricao:">
            </div> 
            <div class="form-group">
                <label for="bandeira">Bandeira do Cartao</label>
                <input  type="text" class="form-control" list="bandeira" required name="bandeira"placeholder="Digite a Bandeira do Cartao" >
                <datalist id="bandeira">
                <option value="VISA">Visa</option>
                <option value="MasterCard">Mastercard</option>
                <option value="Elo">Elo</option>
                <option value="DinnersClub">DinnersClub</option>
                </datalist>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            <div class="form-group">
               <button type= "submit" class ="btn btn-dark"> Salvar</button>
        </form>
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
