<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesDiagnostics extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para los diagnósticos.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'descripcion' => 'required|string|max:255',
            'fecha' => 'required|date',
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'gravedad' => 'required|string|max:50',
            'recomendaciones' => 'nullable|string|max:500',
            'tipo_diagnostico' => 'required|string|max:100',
        ];
    }
}
