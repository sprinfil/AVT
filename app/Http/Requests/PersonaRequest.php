<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:1|max:255',
            'apellido_1' => 'required|min:1|max:255',
            'apellido_2' => 'required|min:1|max:255',
            'estado' => 'required|min:1|max:255',
            'ciudad' => 'required|min:1|max:255',
            'estado' => 'required|min:1|max:255',
            'celular' => 'required||numeric',
            'telefono' => 'required|min:1000000000|max:9999999999|numeric',
            'lugar_nac' => 'required|min:1|max:255',
            'fecha_nac' => 'required',
            'nacionalidad' => 'required|min:1|max:255',
            'colonia' => 'required|min:1|max:255',
            'direccion' => 'required|min:1|max:255',
            'rfc' => 'required|min:13|max:13',
            'estado_civil' => 'required',
            'curp' => 'required|min:18|max:18',
            'ine' => 'required|min:1000000000000|max:9999999999999|numeric',
            'ocupacion' => 'required|min:1|max:255',
            'referencia1_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
            'referencia2_cel' => 'nullable|numeric|min:1000000000|max:9999999999',
        ];
    }
}
