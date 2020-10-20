@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-6 ml-auto mr-auto">
        <div class="card card-login card-white">

            <div class="card-header">
                <img src="{{ asset('black') }}/img/card-primary.png" alt="">
                <h1 class="card-title">{{ __('Log in') }}</h1>
            </div>
            <div class="card-body">
                <button type="button" id="cadastrarAluno" onclick="cadastrarAluno()" class="btn btn-primary btn-round btn-lg active" disabled>{{ __('Aluno') }}</button>
                <button type="button" id="cadastrarFuncionario" onclick="cadastrarFuncionario()" class="btn btn-primary btn-round btn-lg">{{ __('Funcionario') }}</button>
            </div>
            <form class="form" method="post" action="{{ route('login') }}">
                @csrf

                
                <div class="card-body">
                    <div style="display: none;" class="input-group{{ $errors->has('tipoPessoa') ? ' has-danger' : '' }}">
                        <div class=" form-check form-check-inline">
                            <input type="radio" class="form-check-input form-control{{ $errors->has('tipoPessoa') ? ' is-invalid' : '' }}" id="tipoPessoa1" name="tipoPessoa" value=1 checked="checked" required/>
                            <label class="form-check-label">aluno</label>
                            @include('alerts.feedback', ['field' => 'tipoPessoa'])
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input form-control{{ $errors->has('tipoPessoa') ? ' is-invalid' : '' }}" id="tipoPessoa2" name="tipoPessoa" value=2 require/>
                            <label class="form-check-label">funcionario</label>
                            @include('alerts.feedback', ['field' => 'tipoPessoa'])
                        </div>
                    </div>

                    <p class="text-dark mb-2">Entre com seu e-mail e com sua senha</strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Senha') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Entrar') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link">{{ __('Criar conta') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Esqueceu a senha?') }}</a>
                        </h6>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function cadastrarAluno() 
        {
            document.getElementById("cadastrarAluno").disabled = true;
            document.getElementById("cadastrarFuncionario").disabled = false;
            document.getElementById("tipoPessoa1").checked="checked"
        }
        function cadastrarFuncionario() 
        {
            document.getElementById("cadastrarFuncionario").disabled = true; 
            document.getElementById("cadastrarAluno").disabled = false;
            document.getElementById("tipoPessoa2").checked="checked"
        }
    </script>
@endsection
