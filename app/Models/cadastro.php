<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomesinst',
        'tel1',
        'tel2',
        'email',
        'campatuacao',
        'descricao',
    ];
}