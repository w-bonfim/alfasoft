<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
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
            'name' =>  'required|min:6|max:50',
            'phone' => 'required|numeric|digits:9',
            'email' => ['required', Rule::unique('contacts', 'email')->ignore($this->id, 'id'), 'email', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name' => [
                'required' => 'O nome é obrigatório.',
                'min' => 'O nome deve conter no mínimo seis caracteres.',
                'max' => 'O nome deve conter no máximo cinquenta caracteres.',
            ],
            'phone' => [
                'required' => 'O telefone é obrigatório.',
                'max' => 'O telefone deve conter no máximo nove caracteres.',
                'numeric' => 'O telefone deve ser um número.',
                'digits' => 'O telefone deve conter no máximo nove caracteres.',
            ],
            'email' => [
                'required' => 'O e-mail é obrigatório.',
                'unique' => 'Esse endereço de email já está em uso por outro contato.',
                'email' => 'O endereço de e-mail informado não é válido.',
                'max' => 'O e-mail deve conter no máximo cinquenta caracteres.',
            ]
        ];
    }


}
