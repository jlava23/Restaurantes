<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex space-x-8">
                <a href="{{ route('mesas.index') }}" class="{{ request()->routeIs('mesas.index') ? 'font-bold' : '' }}">
                    {{ __('Gestionar Mesas') }}
                </a>
                <a href="{{ route('clientes.index') }}" class="{{ request()->routeIs('clientes.index') ? 'font-bold' : '' }}">
                    {{ __('Gestionar Clientes') }}
                </a>
                <a href="{{ route('reservas.index') }}" class="{{ request()->routeIs('reservas.index') ? 'font-bold' : '' }}">
                    {{ __('Gestionar Reservas') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

