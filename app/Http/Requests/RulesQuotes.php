<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesQuotes extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para la solicitud de citas.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'motivo' => 'required|string|max:255',
            'estado' => 'nullable|string|in:pendiente,confirmada,cancelada',
        ];
    }
}
