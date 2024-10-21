@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Mesa</h1>

    <form action="{{ route('mesas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" name="numero" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="capacidad">Capacidad</label>
            <input type="number" name="capacidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
