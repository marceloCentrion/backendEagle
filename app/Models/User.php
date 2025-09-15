<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

     protected function cep(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) =>
                $value ? substr($value, 0, 5) . '-' . substr($value, 5, 3) : null,

            set: fn (?string $value) =>
                $value ? preg_replace('/\D/', '', $value) : null
        );
    }

    protected function cpf(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) =>
                $value ? preg_replace(
                    '/(\d{3})(\d{3})(\d{3})(\d{2})/',
                    '$1.$2.$3-$4',
                    $value
                ) : null,

            set: fn (?string $value) =>
                $value ? preg_replace('/\D/', '', $value) : null
        );
    }

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

    public function academia(){
        return $this->belongsTo(Academia::class, 'academia_id');
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
