@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mesa_id">Mesa</label>
            <select name="mesa_id" class="form-control" required>
                @foreach($mesas as $mesa)
                    <option value="{{ $mesa->id }}">{{ $mesa->numero }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha</label>
            <input type="date" name="fecha_reserva" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora</label>
            <input type="time" name="hora_reserva" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="numero_personas">Número de Personas</label>
            <input type="number" name="numero_personas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
