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
            $rules['document_number'] = 'required|digits:8|unique:people,document_number,' . $this->id . ',id,status,1';
        } else {
            $rules['document_number'] = 'required|digits:11|unique:people,document_number,' . $this->id . ',id,status,1';
        }

        $rules['legal_name'] = 'required';
        $rules['direction'] = 'required';
        $rules['doc_types'] = 'required|exists:doc_types,id';
        $rules['persontype'] = 'required';
        $rules['email'] = 'nullable|email';
        $rules['gender'] = "nullable|in:male,female";
        $rules['rating'] = "nullable|in:1,2,3,4,5";

        if (in_array(1, $this->persontype)) {
            $rules['client_category_id'] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [];
        $messages['legal_name.required'] = 'El nombre legal es requerido.';
        $messages['direction.required'] = 'La dirección es requerida.';
        $messages['doc_types.required'] = 'El tipo de documento es requerido.';
        $messages['doc_types.exists'] = 'El tipo de documento seleccionado no existe.';
        $messages['persontype.required'] = 'El tipo de persona es requerido.';
        $messages['email.email'] = "El email debe tener un formato correcto.";
        $messages['client_category_id.required'] = "El tipo de precio es requerido.";

        if ($this->doc_types == "1") {
            $messages['document_number.required'] = 'El DNI es requerido.';
            $messages['document_number.digits'] = 'El DNI debe ser numérico y tener 8 digitos.';
            $messages['document_number.unique'] = 'El DNI ya existe.';
        } else {
            $messages['document_number.required'] = 'El RUC es requerido.';
            $messages['document_number.digits'] = 'El RUC debe ser numérico y tener 11 digitos.';
            $messages['document_number.unique'] = 'El RUC ya existe.';
        }

        return $messages;
    }
}
