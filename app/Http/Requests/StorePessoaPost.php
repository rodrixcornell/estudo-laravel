<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'telefone' => 'required|max:20',
            'cpf' => 'digits:11|nullable',
            // 'email' => 'required|max:100|email|unique:pessoas',
            // 'email' => 'max:100|email|unique:pessoas',
        ];
    }
}
