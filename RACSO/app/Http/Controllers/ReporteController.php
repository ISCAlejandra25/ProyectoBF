<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Reporte::all();
        return Inertia::render(
            'Reportes/Index',
            [
                'reportes' => $reportes
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
            'Reportes/Create'
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
            'gasReparacion' => 'required',
            'gasInternet' => 'required',
            'gasTV' => 'required',
            'suelLimpieza' => 'required',
            'gasMantenimiento' => 'required',
            'gasComicionable' => 'required',
            'Fecha' => 'required'

        ]);
        Reporte::create([
            'gasReparacion' => $request->gasReparacion,
            'gasInternet' => $request->gasInternet,
            'gasTV' => $request->gasTV,
            'suelLimpieza' => $request->suelLimpieza,
            'gasMantenimiento' => $request->gasMantenimiento,
            'gasComicionable' => $request->gasComicionable,
            'Fecha' => $request->Fecha
        ]);
        sleep(1);
        return redirect()->route('reportes.index')->with('message', 'Reporte Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        return Inertia::render(
            'Reportes/Show',
            [
                'reporte' => $reporte
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        return Inertia::render(
            'Reportes/Edit',
            [
                'reporte' => $reporte
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        $request->validate([
            'gasReparacion' => 'required',
            'gasInternet' => 'required',
            'gasTV' => 'required',
            'suelLimpieza' => 'required',
            'gasMantenimiento' => 'required',
            'gasComicionable' => 'required',
            'Fecha' => 'required'
        ]);
        $reporte->gasReparacion = $request->gasReparacion;
        $reporte->gasInternet = $request->gasInternet;
        $reporte->gasTV = $request->gasTV;
        $reporte->suelLimpieza = $request->suelLimpieza;
        $reporte->gasMantenimiento = $request->gasMantenimiento;
        $reporte->gasComicionable = $request->gasComicionable;
        $reporte->Fecha = $request->Fecha;

        $reporte->save();
        sleep(1);
        return redirect()->route('reportes.index')->with('message', 'Reporte Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        sleep(1);
        return redirect()->route('reportes.index')->with('message', 'Reporte Delete Successfully');
    }
}
