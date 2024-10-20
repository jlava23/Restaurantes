@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reserva</h1>

    <form action="{{ route('reservas.update', $reserva) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $cliente->id == $reserva->cliente_id ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mesa_id">Mesa</label>
            <select name="mesa_id" class="form-control" required>
                @foreach($mesas as $mesa)
                    <option value="{{ $mesa->id }}" {{ $mesa->id == $reserva->mesa_id ? 'selected' : '' }}>
                        {{ $mesa->numero }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha</label>
            <input type="date" name="fecha_reserva" class="form-control" value="{{ $reserva->fecha_reserva }}" required>
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora</label>
            <input type="time" name="hora_reserva" class="form-control" value="{{ $reserva->hora_reserva }}" required>
        </div>
        <div class="form-group">
            <label for="numero_personas">Número de Personas</label>
            <input type="number" name="numero_personas" class="form-control" value="{{ $reserva->numero_personas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
