<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    protected $fillable = ['nomCasa','numHabitaciones', 'numBanos', 'numAlbercas','aC','numVentilador','numTV','wifi','cochera','direccionCompleta'];
}
