<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends BaseModel
{
    protected $fillable = [
        "cidade_id",
        "cnpj",
        "descricao",
        "email",
        "email_responsavel",
        "fim_periodo",
        "inicio_periodo",
        "logo",
        "nome",
        "nome_responsavel",
        "segmento",
        "site",
        "telefone",
        "estado_id",
        "creator",
        "slug",
    ];

    protected function cnpj(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) =>
                $value ? preg_replace(
                    '/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/',
                    '$1.$2.$3/$4-$5',
                    $value
                ) : null,

            set: fn (?string $value) =>
                $value ? preg_replace('/\D/', '', $value) : null
        );
    }
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

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidade_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }


}
