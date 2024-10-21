@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mesas</h1>
    <a href="{{ route('mesas.create') }}" class="btn btn-primary mb-3">Agregar Mesa</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Número</th>
                <th scope="col">Capacidad</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mesas as $mesa)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $mesa->numero }}</td>
                <td>{{ $mesa->capacidad }}</td>
                <td>{{ $mesa->ubicacion }}</td>
                <td>
                    <a href="{{ route('mesas.edit', $mesa) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('mesas.destroy', $mesa) }}" method="POST" style="display:inline;">
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