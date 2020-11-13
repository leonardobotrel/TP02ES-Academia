@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Novo Perfil')
@section('content_header')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
          <form action="{{route('exercicios.store')}}" class="form" method='POST'>
                @csrf
                <div>
                    <label for="Grupo">Grupo de Exercicio:</label>
                </div>
                <select name="Grupo" list="Grupo" class="form-control" placeholder="Grupo" required>
                    
                        <option value="Ombro" style="background-color: 	#BA55D3">Ombro</option>
                        <option value="Perna" style="background-color: 	#BA55D3">Perna</option>
                        <option value="Panturrilha" style="background-color: 	#BA55D3">Panturrilha</option>
                        <option value="Costas" style="background-color: 	#BA55D3">Costas</option>
                        <option value="Gluteos" style="background-color: 	#BA55D3">Gluteos</option>
                        <option value="Peito" style="background-color: 	#BA55D3">Peito</option>
                        <option value="Biceps" style="background-color: 	#BA55D3">Biceps</option>
                        <option value="Triceps" style="background-color: 	#BA55D3">Triceps</option>
                                     
                </select>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
                <div class="form-group">
                    <label >Nome:</label>
                    <input type="text" name="Nome_Exercicio" class="form-control" placeholder="Nome:">
                </div>
        
                <div class="form-group">
                    <label >Sessao:</label>
                    <input type="integer" name="Sessao" class="form-control" placeholder="Descricao:">
                </div> 
                
                <div class="form-group">
                    <label >Repeticao:</label>
                    <input type="integer" name="Repeticao" class="form-control" placeholder="Descricao:">
                </div> 
                <div class="form-group">
                <button type= "submit" class ="btn btn-dark"> Criar Exercicio</button>
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
