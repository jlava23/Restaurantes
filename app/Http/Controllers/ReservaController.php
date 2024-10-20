<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Mesa;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with(['mesa', 'cliente'])->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $mesas = Mesa::all();
        $clientes = Cliente::all();
        return view('reservas.create', compact('mesas', 'clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mesa_id' => 'required|exists:mesas,id',
            'cliente_id' => 'required|exists:clientes,id',
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required|date_format:H:i',
            'numero_personas' => 'required|integer',
        ]);

        Reserva::create($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva creada con éxito.');
    }

    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva)
    {
        $mesas = Mesa::all();
        $clientes = Cliente::all();
        return view('reservas.edit', compact('reserva', 'mesas', 'clientes'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([
            'mesa_id' => 'required|exists:mesas,id',
            'cliente_id' => 'required|exists:clientes,id',
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required|date_format:H:i',
            'numero_personas' => 'required|integer',
        ]);

        $reserva->update($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada con éxito.');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada con éxito.');
    }
}

