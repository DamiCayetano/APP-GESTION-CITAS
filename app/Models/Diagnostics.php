<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostics extends Model
{
    /** @use HasFactory<\Database\Factories\DiagnosticsFactory> */
    protected $fillable = [
        'descripcion',
        'fecha',
        'paciente_id',
        'medico_id',
        'gravedad',
        'recomendaciones',
        'tipo_diagnostico'
    ];

    // Relaciones
    public function paciente()
    {
        return $this->belongsTo(Patients::class);
    }

    public function medico()
    {
        return $this->belongsTo(Doctors::class);
    }

}
