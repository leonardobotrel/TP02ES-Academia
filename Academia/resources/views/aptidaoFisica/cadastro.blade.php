@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Exame Físico')
@section('content_header')
<h1>Cadastrar Exame Físico
    <a href="" class = "btn btn-dark">Adicionar</a>
</h1>

@endsection
@section('content')
<div class="card">
    <div class="card-body">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/aptidaoFisica/cadastro" class="needs-validation" method='POST' novalidate>
            {{csrf_field()}}
            <div class="form-group">
                <div>
                    <label for="nome">Nome:</label>
                </div>
                <select name="Nome" list="nomes" class="form-control" placeholder="Nome" required>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}" style="background-color: 	#BA55D3">{{$user->name}}</option>
                    @endforeach                            
                </select>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Peso (kg):</label>
                <input type="double" name="Peso" class="form-control" placeholder="Peso (kg)" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Altura (m):</label>
                <input type="double" name="Altura" class="form-control" placeholder="Altura (m)" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Pressão Arterial:</label>
                <input type="text" name="Pressao" class="form-control" placeholder="Pressão Arterial" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Percentual de Gordura:</label>
                <input type="integer" name="Gordura" class="form-control" placeholder="Percentual de Gordura" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div> 
            <div class="form-group">
                <label >Percentual Massa Magra:</label>
                <input type="integer" name="MassaMagra" class="form-control" placeholder="Percentual Massa Magra" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div> 
            <div class="form-group">
                <label >IMC:</label>
                <input type="double" name="IMC" class="form-control" placeholder="IMC" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div> 
            <div class="form-group">
                <label >Situação:</label>
                <div class=" form-check form-check-inline">
                    <label class="form-check-label">Não habilitado </label>
                    <input type="radio" class="form-check-input" name="Situacao" value=1 checked="checked" required/>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">Habilitado </label>
                    <input type="radio" class="form-check-input" name="Situacao" value=2 require/>
                </div>
            </div> 
            <div class="form-group">
               <button type= "submit" class ="btn btn-dark">Salvar</button>
            </div>
        </form>
    </div>
</div>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
