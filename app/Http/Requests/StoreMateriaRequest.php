<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMateriaRequest extends FormRequest
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
        $rules = [
            'numero' => 'required|integer|min:1',
            'nombre' => 'required|string|min:1',
            'anio' => 'required|integer|min:1|max:50',
            'division' => 'required|integer|min:1|max:50',
        ];

        if ($this->isMethod('POST')) // solo en create
            $rules['logo'] = 'required|image|max:1024';
        else  // update
            $rules['logo'] = 'nullable|image|max:1024';


        return $rules;
    }
}
