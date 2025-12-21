@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Bem-vindo ao <strong>Projeto Voch</strong></h2>

    {{-- Cards de totais --}}
    <div class="row g-4 justify-content-center mb-5">
        <div class="col-sm-6 col-md-3">
            <div class="card text-white bg-primary h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-2 fs-1">🏦</div>
                    <h5 class="card-title">Grupos Econômicos</h5>
                    <p class="card-text">Total: {{ $totalGrupos }}</p>
                    <a href="{{ route('grupos-economicos.index') }}" class="btn btn-light btn-sm mt-2">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="card text-white bg-success h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-2 fs-1">🏳️</div>
                    <h5 class="card-title">Bandeiras</h5>
                    <p class="card-text">Total: {{ $totalBandeiras }}</p>
                    <a href="{{ route('bandeiras.index') }}" class="btn btn-light btn-sm mt-2">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="card text-white bg-warning h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-2 fs-1">🏬</div>
                    <h5 class="card-title">Unidades</h5>
                    <p class="card-text">Total: {{ $totalUnidades }}</p>
                    <a href="{{ route('unidades.index') }}" class="btn btn-light btn-sm mt-2">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="card text-white bg-secondary h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-2 fs-1">👥</div>
                    <h5 class="card-title">Colaboradores</h5>
                    <p class="card-text">Total: {{ $totalColaboradores }}</p>
                    <a href="{{ route('colaboradores.index') }}" class="btn btn-light btn-sm mt-2">Acessar</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Filtro encadeado com Livewire --}}
    <div class="mt-5">
        <h4 class="mb-3 text-center">Consulta de Colaboradores por Unidade</h4>
        @livewire('filtro-colaboradores')
    </div>
</div>
@endsection