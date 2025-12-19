@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Bem-vindo ao Projeto Vogh</h1>
    <p class="lead">Escolha uma das opções abaixo para começar:</p>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="{{ route('grupos-economicos.index') }}" class="btn btn-primary btn-lg">Grupos Econômicos</a>
        <a href="{{ route('bandeiras.index') }}" class="btn btn-success btn-lg">Bandeiras</a>
        <a href="{{ route('unidades.index') }}" class="btn btn-warning btn-lg">Unidades</a>
    </div>
</div>
@endsection