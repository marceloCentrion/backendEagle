<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndicacaoRequest extends FormRequest
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
            'codigo' => 'required|string|max:200',
            'user_id' => 'required|string|max:200|exists:users,id',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',    
        ];
    }

    public function messages(){
        return[
        'codigo.required' => 'O campo código é obrigatório.',
        'user_id.required' => 'O campo user_id é obrigatório.',
        'user_id.exists' => 'O user_id informado não existe.',
        ];
    }
}
