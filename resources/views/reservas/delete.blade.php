@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eliminar Reserva</h1>

    <p>¿Estás seguro de que deseas eliminar la reserva para {{ $reserva->cliente->nombre }} {{ $reserva->cliente->apellido }} en la mesa {{ $reserva->mesa->numero }}?</p>

    <form action="{{ route('reservas.destroy', $reserva) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
