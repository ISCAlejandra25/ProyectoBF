<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentas = Renta::all();
        return Inertia::render(
            'Rentas/Index',
            [
                'rentas' => $rentas
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render(
            'Rentas/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'nhAdulto' => 'required',
            'nhMenor' => 'required',
            'cProcedencia' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'nomCasa' => 'required',
            'fechaIngreso' => 'required',
            'fechaSalida' => 'required'
        ]);
        Renta::create([
            'nombre' => $request->nombre,
            'nhAdulto' => $request->nhAdulto,
            'nhMenor' => $request->nhMenor,
            'cProcedencia' => $request->cProcedencia,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'nomCasa' => $request->nomCasa,
            'fechaIngreso' => $request->fechaIngreso,
            'fechaSalida' => $request->fechaSalida
        ]);
        sleep(1);
        return redirect()->route('rentas.index')->with('message', 'Registro de renta creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function show(Renta $renta)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function edit(Renta $renta)
    {
        return Inertia::render(
            'Rentas/Edit',
            [
                'renta' => $renta
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renta $renta)
    {
        $request->validate([
            'nombre' => 'required',
            'nhAdulto' => 'required',
            'nhMenor' => 'required',
            'cProcedencia' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'nomCasa' => 'required',
            'fechaIngreso' => 'required',
            'fechaSalida' => 'required'
        ]);
        $renta->nombre = $request->nombre;
        $renta->nhAdulto = $request->nhAdulto;
        $renta->nhMenor = $request->nhMenor;
        $renta->cProcedencia = $request->cProcedencia;
        $renta->telefono = $request->telefono;
        $renta->correo = $request->correo;
        $renta->nomCasa = $request->nomCasa;
        $renta->fechaIngreso = $request->fechaIngreso;
        $renta->fechaSalida = $request->fechaSalida;
        $renta->save();
        sleep(1);
        return redirect()->route('rentas.index')->with('message', 'Renta actualizada correctamente ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renta $renta)
    {
        $renta->delete();
        sleep(1);
        return redirect()->route('rentas.index')->with('message', 'Renta eliminada correctamente');
    }
}
