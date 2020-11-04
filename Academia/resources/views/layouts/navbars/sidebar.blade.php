<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">{{ __('Nome Academia') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Usuário') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('planos.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Planos') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('turma.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Turmas') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('profiles.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Perfil') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('turma.index') }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('Alunos') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('modalidade.index') }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('Modalidades') }}</p>
                    </a>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('treino.index') }}">
                    <i class="tim-icons icon-calendar-60"></i>
                    <p>{{ __('Ficha de treino') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('aptidao.index') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p>{{ __('Exame Físico') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
