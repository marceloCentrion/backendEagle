<?php

namespace App\Http\Requests\Indicacao;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIndicacaoRequest extends FormRequest
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
            'codigo' => 'sometimes|string|max:200',
            'user_id' => 'sometimes|string|max:200|exists:users,id',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',    
        ];
    }

    public function messages(){
        return[
        'codigo.string' => 'O campo código não é válido.',
        'user_id.string' => 'O campo user_id não é válido.',
        'user_id.exists' => 'O user_id informado não existe.',
        ];
    }
}
