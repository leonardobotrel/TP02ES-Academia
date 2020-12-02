<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? '' }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                               <li class="nav-item ">
                    <a href="inicio" class="nav-link">
                        <i class="fas fa-home"></i> {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="equipe" class="nav-link">
                        <i class="fas fa-users"></i>{{ __(' Equipe') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="galeria" class="nav-link">
                        <i class="fas fa-images"></i> {{ __('Galeria') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="modalidades" class="nav-link">
                        <i class="fas fa-align-justify"></i> {{ __('Modalidades') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="contato" class="nav-link">
                        <i class="fas fa-address-card"></i> {{ __('Contato') }}
                    </a>
                </li>
            
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> {{ __('Registre-se') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="tim-icons icon-single-02"></i> {{ __('Login') }}
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
