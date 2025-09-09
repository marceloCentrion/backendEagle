<?php

namespace App\Models;

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
}
