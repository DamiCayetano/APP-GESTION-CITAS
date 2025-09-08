<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    /** @use HasFactory<\Database\Factories\QuotesFactory> */
    protected $fillable = [
        'fecha',
        'motivo',
        'paciente_id',
        'medico_id',
        'estado',
        'observaciones',
        'sala'
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
