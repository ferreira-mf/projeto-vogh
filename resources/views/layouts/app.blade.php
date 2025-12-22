<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema Voch')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Estilos do Livewire --}}
    @livewireStyles
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Projeto Voch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('grupos-economicos.index') }}">Grupos Econômicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bandeiras.index') }}">Bandeiras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('unidades.index') }}">Unidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('colaboradores.index') }}">Colaboradores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/auditoria') }}">Registro de Atividades</a>
                </li>
            </ul>

            {{-- Área de autenticação --}}
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <span class="nav-link">
                            Bem-vindo, {{ auth()->user()->name }}
                        </span>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="cursor:pointer;">
                                Sair
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- Scripts do Livewire --}}
@livewireScripts
@stack('scripts')
</body>
</html>