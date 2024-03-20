<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'code' => 'required|unique:products,code,' . $this->id . ',id,status,1',
            'name' => 'required',
            'cost' => 'required|numeric',
            'unit_of_measure_id' => 'required',
            'warehouse_id' => 'required',
            'type' => 'required|in:product,service',
            'minimum_stock' => 'numeric|nullable',
            'initial_stock' => 'required|numeric',
            'category_id' => 'required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'El codigo es requerido.',
            'code.unique' => 'El codigo ya existe.',
            'name.required' => 'El nombre es requerido.',
            'cost.required' => 'El costo es requerido.',
            'cost.numeric' => 'El costo debe ser un número.',
            'unit_of_measure_id.required' => 'La unidad es requerida.',
            'warehouse_id.required' => 'El almacén es requerido.',
            'type.required' => 'El tipo es requerido.',
            'type.in' => 'El tipo debe ser producto o servicio',
            'minimum_stock.numeric' => 'El stock mínimo debe ser un número.',
            'initial_stock.required' => 'El stock inicial es requerido.',
            'initial_stock.numeric' => 'El stock inicial debe ser un número.',
            'category_id.required' => 'La categoría es requerida.',
            'images.*.mimes' => 'El archivo debe ser de tipo JPG, JPEG, PNG, GIF o SVG'
        ];
    }
}
