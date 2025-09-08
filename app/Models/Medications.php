<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medications extends Model
{
    /** @use HasFactory<\Database\Factories\PatientsFactory> */
    use HasFactory;

    protected $fillable = [
    'nombre',
    'dosis',
    'frecuencia',
    'duracion',
    'tratamiento_id',
    'proovedor',
    'efectos_secundarios'
];


}
