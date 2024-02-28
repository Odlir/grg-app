<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];

        if ($this->doc_types == "1") {
            $rules['nro_documento'] = 'required|digits:8|unique:people,nro_documento,' . $this->id . ',id,estado,1';
        } else {
            $rules['nro_documento'] = 'required|digits:11|unique:people,nro_documento,' . $this->id . ',id,estado,1';
        }

        $rules['nombre_legal'] = 'required';
        $rules['direccion'] = 'required';
        $rules['doc_types'] = 'required|exists:doc_types,id';
        $rules['tipo_persona'] = 'required|exists:person_types,id';

        return $rules;
    }

    public function messages()
    {
        $messages = [];
        $messages['nombre_legal.required'] = 'El nombre legal es requerido.';
        $messages['direccion.required'] = 'La dirección es requerida.';
        $messages['doc_types.required'] = 'El tipo de documento es requerido.';
        $messages['doc_types.exists'] = 'El tipo de documento seleccionado no existe.';
        $messages['tipo_persona.required'] = 'El tipo de persona es requerido.';
        $messages['tipo_persona.exists'] = 'El tipo de persona seleccionado no existe.';

        if ($this->tipo_cliente == "1") {
            $messages['nro_documento.required'] = 'El DNI es requerido.';
            $messages['nro_documento.digits'] = 'El DNI debe ser numérico y tener 8 digitos.';
            $messages['nro_documento.unique'] = 'El DNI ya existe.';
        } else {
            $messages['nro_documento.required'] = 'El RUC es requerido.';
            $messages['nro_documento.digits'] = 'El RUC debe ser numérico y tener 11 digitos.';
            $messages['nro_documento.unique'] = 'El RUC ya existe.';
        }

        return $messages;
    }
}
