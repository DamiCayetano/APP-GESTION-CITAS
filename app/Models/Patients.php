<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    /** @use HasFactory<\Database\Factories\PatientsFactory> */
    use HasFactory;

    protected $fillable = [
    'nombre',
    'apellidos',
    'fecha_nacimiento',
    'genero',
    'telefono',
    'direccion',
    'tipo_sangre'
];
}
