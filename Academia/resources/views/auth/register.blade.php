@extends('layouts.app', ['class' => 'register-page', 'page' => __('Página de registro'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Comece uma nova vida') }}</h3>
                    <p class="description">
                        {{ __('Com a melhor infraestrutura e com o que você precisa pra mudar de vida.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Temos o melhor serviço') }}</h3>
                    <p class="description">
                        {{ __('Contamos sempre com os melhores profissionais de saúde.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
                    <h4 class="card-title">{{ __('Registre-se') }}</h4>
                </div>
                <div class="card-body">
                    <button type="button" id="cadastrarAluno" onclick="cadastrarAluno()" class="btn btn-primary btn-round btn-lg active" disabled>{{ __('Aluno') }}</button>
                    <button type="button" id="cadastrarFuncionario" onclick="cadastrarFuncionario()" class="btn btn-primary btn-round btn-lg">{{ __('Funcionario') }}</button>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div style="display: none;" class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class=" form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="tipoPessoa1" name="tipoPessoa" value=1 checked="checked" required/>
                                <label class="form-check-label">aluno</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="tipoPessoa2" name="tipoPessoa" value=2 require/>
                                <label class="form-check-label">funcionario</label>
                            </div>
                        </div>
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
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
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Senha') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirme a senha') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('Eu concordo com os') }}
                                <a href="#">{{ __('Termos e condições') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Registrar-se') }}</button>
                    </div>
                </form>
            </div>
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

