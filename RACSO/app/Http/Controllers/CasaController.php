<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casas = Casa::all();
        return Inertia::render(
            'Casas/Index',
            [
                'casas' => $casas
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
            'Casas/Create'
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
            'nomCasa' => 'required',
            'numHabitaciones' => 'required',
            'numBanos' => 'required',
            'numAlbercas' => 'required',
            'aC' => 'required',
            'numVentilador' => 'required',
            'numTV' => 'required',
            'wifi' => 'required',
            'cochera' => 'required',
            'direccionCompleta' => 'required'
        ]);
        Casa::create([
            'nomCasa' => $request->nomCasa,
            'numHabitaciones' => $request->numHabitaciones,
            'numBanos' => $request->numBanos,
            'numAlbercas' => $request->numAlbercas,
            'aC' => $request->aC,
            'numVentilador' => $request->numVentilador,
            'numTV' => $request->numTV,
            'wifi' => $request->wifi,
            'cochera' => $request->cochera,
            'direccionCompleta' => $request->direccionCompleta

        ]);
        sleep(1);
        return redirect()->route('casas.index')->with('message', 'Casa Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function show(Casa $casa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function edit(Casa $casa)
    {
        return Inertia::render(
            'Casas/Edit',
            [
                'casa' => $casa
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casa $casa)
    {
        $request->validate([
            'nomCasa' => 'required',
            'numHabitaciones' => 'required',
            'numBanos' => 'required',
            'numAlbercas' => 'required',
            'aC' => 'required',
            'numVentilador' => 'required',
            'numTV' => 'required',
            'wifi' => 'required',
            'cochera' => 'required',
            'direccionCompleta' => 'required'
        ]);
        $casa->nomCasa = $request->nomCasa;
        $casa->numHabitaciones = $request->numHabitaciones;
        $casa->numBanos = $request->numBanos;
        $casa->numAlbercas = $request->numAlbercas;
        $casa->aC = $request->aC;
        $casa->numVentilador = $request->numVentilador;
        $casa->numTV = $request->numTV;
        $casa->wifi = $request->wifi;
        $casa->cochera = $request->cochera;
        $casa->direccionCompleta = $request->direccionCompleta;
        $casa->save();
        sleep(1);
        return redirect()->route('casas.index')->with('message', 'Casa Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casa $casa)
    {
        $casa->delete();
        sleep(1);
        return redirect()->route('casas.index')->with('message', 'Casa Delete Successfully');
    }
}
