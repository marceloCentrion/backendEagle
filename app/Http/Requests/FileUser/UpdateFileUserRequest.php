<?php

namespace App\Http\Requests\FileUser;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFileUserRequest extends FormRequest
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
            'arquivo' => 'sometimes|string',
        ];
    }

    public function messages(): array
    {
        return [
            'arquivo.string' => 'O campo arquivo deve conter um texto válido.',
           ];
    }
}
