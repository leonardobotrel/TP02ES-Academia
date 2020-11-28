@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Nova Matricula')
@section('content_header')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('matriculas.store')}}" class="form" method='POST'>
            @csrf
            <div>
                <label for="nome">Nome:</label>
            </div>
            <select name="Nome" list="nomes" class="form-control" placeholder="Nome" required>
                @foreach ($user as $user)
                    <option value="{{$user->id}}" style="background-color: 	#BA55D3">{{$user->name}}</option>
                @endforeach                            
            </select>
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
                <div>
                    <label for="plan_id">Plano:</label>
                </div>
                <select name="plan_id" list="plan_id" class="form-control" placeholder="Plano" required>
                    @foreach ($plan as $plano)
                        <option value="{{$plano->Nome}}" style="background-color: 	#BA55D3">{{$plano->Nome}}</option>
                    @endforeach                            
                </select>
                
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="">
                <label><strong>Selecione as Turmas :</strong></label><br/>
                @if()
                    @foreach ($turmas as $turma)
                         @if ($turma->Modalidade == "plan_id")    
                         @if($turma->vagas_ocupadas <='30')
                                <td> 
                                <tr>
                                    <label> <input type="checkbox" name = "turma[]" value="{{$turma->id}} " > Horario Inicio : {{  $turma->Horario_Inicio}} | Modalidade : {{$turma->Modalidade}}  | Professor : {{$turma->Professor}} | Dia : {{$turma->Dia}}  |  </label>  
                                </tr>
                                </td>                 
                        @endif
                        @endif
                    @endforeach 
              
            </div>
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
