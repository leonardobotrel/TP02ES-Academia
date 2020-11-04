@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Ficha de Treino')
@section('content_header')
<h1>Cadastrar Ficha de Treino
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
    <form action="/treino/cadastro" class="needs-validation" method='POST' novalidate>
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
                <label >Peito:</label>
                <input type="text" name="peito" class="form-control" placeholder="Exercícios para o peito" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Bíceps:</label>
                <input type="text" name="biceps" class="form-control" placeholder="Exercícios para os bíceps" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Tríceps:</label>
                <input type="text" name="triceps" class="form-control" placeholder="Exercícios para os tríceps" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>
            <div class="form-group">
                <label >Costas:</label>
                <input type="text" name="costas" class="form-control" placeholder="Exercícios para às costas" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div> 
            <div class="form-group">
                <label >Ombros:</label>
                <input type="text" name="ombros" class="form-control" placeholder="Exercícios para os ombros" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div> 
            <div class="form-group">
                <label >Glúteos:</label>
                <input type="text" name="gluteos" class="form-control" placeholder="Exercícios para os glúteos" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>  
            <div class="form-group">
                <label >Pernas:</label>
                <input type="text" name="pernas" class="form-control" placeholder="Exercícios para as pernas" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
            </div>  
            <div class="form-group">
                <label >Panturrilhas:</label>
                <input type="text" name="panturrilhas" class="form-control" placeholder="Exercícios para às panturrilhas" required>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Por favor preencha este campo</div>
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
