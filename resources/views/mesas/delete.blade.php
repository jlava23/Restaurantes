@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eliminar Mesa</h1>

    <p>¿Estás seguro de que deseas eliminar la mesa número {{ $mesa->numero }}?</p>

    <form action="{{ route('mesas.destroy', $mesa) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

