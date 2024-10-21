@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Mesa</h1>

    <form action="{{ route('mesas.update', $mesa) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" name="numero" class="form-control" value="{{ $mesa->numero }}" required>
        </div>
        <div class="form-group">
            <label for="capacidad">Capacidad</label>
            <input type="number" name="capacidad" class="form-control" value="{{ $mesa->capacidad }}" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ $mesa->ubicacion }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
