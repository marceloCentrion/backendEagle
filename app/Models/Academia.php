<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Academia extends BaseModel
{
    protected $table = 'academias';

    protected $fillable = [
        "cep",
        "cidade_id",
        "cnpj",
        "descricao",
        "email",
        "email_responsavel",
        "endereco",
        "horario",
        "info_adicionais",
        "localidade",
        "logo",
        "nome",
        "receber_atualizacoes_semanais",
        "responsavel",
        "site",
        "telefone",
        "telefone_mascaradao",
        "geo_location",
        "creator",
        "slug",
    ];

    protected function cep(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) =>
                $value ? substr($value, 0, 5) . '-' . substr($value, 5, 3) : null,

            set: fn (?string $value) =>
                $value ? preg_replace('/\D/', '', $value) : null
        );
    }

    //  protected function cnpj(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (?string $value) =>
    //             $value ? preg_replace(
    //                 '/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/',
    //                 '$1.$2.$3/$4-$5',
    //                 $value
    //             ) : null,

    //         set: fn (?string $value) =>
    //             $value ? preg_replace('/\D/', '', $value) : null
    //     );
    // }

    protected function telefone(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) =>
                $value
                    ? (strlen($value) === 11
                        ? preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $value)
                        : preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $value)
                      )
                    : null,

            set: fn (?string $value) =>
                $value ? preg_replace('/\D/', '', $value) : null
        );
    }
}
