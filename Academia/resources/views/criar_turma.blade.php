@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Nova Turma')
@section('content_header')
<h1>Cadastrar novas turmas <a href="{{route ('turma.salvar')}}" class = "btn btn-dark">Adicionar</a></h1>

@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('turma.salvar')}}" class="form" method='POST'>
            @csrf
            <div class="form-group">
                <div>
                   <label for="Modalidade">Modalidade</label>
                      </div>
                      <input     type="text" class="form-control" list="Modalidade" required name="Modalidade"placeholder="Insira a Modalidade" id="inputModalidade">   
                      <datalist id="Modalidade">
                         
                          @foreach ($Modalidades as $Modalidade)
                             <option value="{{$Modalidade->Nome}}"></option>
                          @endforeach                            
                      </datalist>
                  </div>
                <div class="form-group">
                    <label for="Dia">Dia</label>
                    <input  type="text" class="form-control" list="Dia" required name="Dia"placeholder="Entre com o Dia da Semana" >
                    <datalist id="Dia">
                    <option value="Segunda-Feira">Segunda-Feira</option>
                    <option value="Terca-Feira">Terca-FEira</option>
                    <option value="Quarta-Feira">Quarta-Feira</option>
                   <option value="Quinta-Feira">Quinta-Feira</option>
                   <option value="Sexta-Feira"> Sexta-Feira</option>
                    </datalist>
                   
            <div class="form-group">
                <label >Quantidade de Vagas:</label>
                <input type="text" name="QtdVagasTotal" class="form-control" placeholder="Quantidade de Vagas Total:">
            </div>
            <div class="form-group">
                <label >Quantidade de Vagas Ocupadas:</label>
                <input type="text" name="vagas_ocupadas" class="form-control" placeholder="Quantidade de Vagas vagas_ocupadas:">
            </div>
            <div class="form-group">
                <label >Horario Inicio</label>
                <input type="time" name="Horario_Inicio" class="form-control" placeholder="Horario Inicio:" min="06:00" max="20:00" required>
            </div>
            <div class="form-group">
                <label >Horario Fim</label> 
                <input type="time" name="Horario_Fim" class="form-control" placeholder="Horario Termino:" min="07:00" max="20:00" required>
            </div>
            <div class="form-group">
                <label >Professor</label>
                <input type="text" name="Professor" class="form-control" placeholder="Professor da Turma:">
            </div>
           
           
            <div class="form-group">
               <button type= "submit" class ="btn btn-dark"> Criar </button>
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
