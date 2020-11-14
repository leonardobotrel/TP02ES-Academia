@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Cadastrar Ficha de Treino')
@section('content_header')
<h1>Cadastrar Ficha de Treino
    <a href="" class = "btn btn-dark">Adicionar</a>
</h1>
<title>Criadnoa  Ficha de Treino do Aluno</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">Criacao da Ficha de Treino do Aluno</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="/treino/cadastro" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Aluno</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>  
                      
                        <div class="">
                            <label><strong>Selecione o Usuario :</strong></label><br/>
                            <select class="selectpicker" multiple data-live-search="true" name="user">
                                @foreach ($users as $users)
                                <option value="{{$users->id}}" style="background-color: 	#BA55D3">{{$users->id}}</option>
                                 @endforeach    
                            </select>
                        </div>
                  
                        <div class="">
                            <label><strong>Selecione os Exercicios :</strong></label><br/>
                            <select class="selectpicker" multiple data-live-search="true" name="Exercicios">
                                @foreach ($exercicios as $exercicio)
                                <option value="{{$exercicio->Nome_Exercicio}}" style="background-color: 	#BA55D3">{{$exercicio->Nome_Exercicio}}</option>
                                 @endforeach    
                            </select>
                        </div>
                        
                        <div class="text-center" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    

<script>
     $(document).ready(function() {
        $('select').selectpicker();
    });
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
