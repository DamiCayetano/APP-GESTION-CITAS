<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatments extends Model
{
    /** @use HasFactory<\Database\Factories\TreatmentsFactory> */
     protected $fillable = [
        'nombre',
        'descripcion',
        'duracion',
        'diagnostico_id',
        'medico_id',
        'estado',
        'frecuencia_administracion'
    ];

    // Relaciones
    public function diagnostico()
    {
        return $this->belongsTo(Diagnostics::class);
    }

    public function medico()
    {
        return $this->belongsTo(Doctors::class);
    }

}
