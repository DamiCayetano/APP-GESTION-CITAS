<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    /** @use HasFactory<\Database\Factories\PatientsFactory> */
    use HasFactory;

    protected $fillable = [
    'nombre',
    'apellidos',
    'especialidad',
    'telefono',
    'email',
    'licencia',
    'años_experiencia'
];
}

