<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends BaseUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'password',
        'telefone',
        'endereco',
        'bairro',
        'cidade_id',
        'estado_id',
        'cep',
        'cpf_cnpj',
        'dt_nascimento',
        'genero',
        'nivel',
        'tipo_usuario',
        'academia_id',
        'arquivos_id',
        'parceiro_id',
        'slug',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
