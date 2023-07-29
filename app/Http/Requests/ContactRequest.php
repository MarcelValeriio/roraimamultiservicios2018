<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:10',
            'email' => 'required',
            'phone' => 'required',
            'asunto' => 'required|max:255|min:10',
            'mensaje' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name' => 'El campo nombre debe tener al menos 10 caracteres.',
            'email' => 'El campo correo es obligatorio.',
            'phone' => 'El campo telefono es obligatorio.',
            'asunto' => 'El Asunto debe tener al menos 10 catacteres',
            'mensaje' => 'El campo mensaje es obligatorio.',
        ];
    }
}
