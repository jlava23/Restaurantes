@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Cliente</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('clientes.delete', $cliente) }}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
