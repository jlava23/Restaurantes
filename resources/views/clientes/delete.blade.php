@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eliminar Cliente</h1>

    <p>¿Estás seguro de que deseas eliminar a {{ $cliente->nombre }} {{ $cliente->apellido }}?</p>

    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
