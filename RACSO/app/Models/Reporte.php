<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $fillable = ['gasReparacion', 'gasInternet', 'gasTV','suelLimpieza','gasMantenimiento','gasComicionable','Fecha'];
}
