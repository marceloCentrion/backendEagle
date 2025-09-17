<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSegmentosParceirosRequest extends FormRequest
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
            "nome_segmento"=> "string|sometimes|max:200  ",
        ];
    }

    public function messages(): array
    {
        return [
            'nome_segmento.max' => 'O campo nome_segmento não deve exceder 200 caracteres.',
        ];
    }
}
