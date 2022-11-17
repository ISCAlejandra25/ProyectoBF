<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'nhAdulto', 'nhMenor','cProcedencia','telefono','correo','nomCasa','fechaIngreso','fechaSalida'];

}
