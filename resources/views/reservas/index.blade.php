@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Agregar Reserva</a>

    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Mesa</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Número de Personas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->cliente->nombre }} {{ $reserva->cliente->apellido }}</td>
                <td>{{ $reserva->mesa->numero }}</td>
                <td>{{ $reserva->fecha_reserva }}</td>
                <td>{{ $reserva->hora_reserva }}</td>
                <td>{{ $reserva->numero_personas }}</td>
                <td>
                    <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('reservas.delete', $reserva) }}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
