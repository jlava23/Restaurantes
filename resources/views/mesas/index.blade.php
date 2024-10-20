@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Mesas</h1>
    <a href="{{ route('mesas.create') }}" class="btn btn-primary">Agregar Mesa</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Capacidad</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mesa)
                <tr>
                    <td>{{ $mesa->numero }}</td>
                    <td>{{ $mesa->capacidad }}</td>
                    <td>{{ $mesa->ubicacion }}</td>
                    <td>
                        <a href="{{ route('mesas.edit', $mesa) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('mesas.destroy', $mesa) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta mesa?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection