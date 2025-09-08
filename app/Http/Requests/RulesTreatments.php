<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesTreatments extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para el formulario de tratamientos.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|string|max:50',
            'diagnostico_id' => 'required|exists:diagnosticos,id',
            'medico_id' => 'required|exists:medicos,id',
            'estado' => 'required|string|max:50',
            'frecuencia_administracion' => 'required|string|max:100',
        ];
    }
}

