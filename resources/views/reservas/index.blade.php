@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Agregar Reserva</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Mesa</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Número de Personas</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $reserva->cliente->nombre }} {{ $reserva->cliente->apellido }}</td>
                <td>{{ $reserva->mesa->numero }}</td>
                <td>{{ $reserva->fecha_reserva }}</td>
                <td>{{ $reserva->hora_reserva }}</td>
                <td>{{ $reserva->numero_personas }}</td>
                <td>
                    <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
