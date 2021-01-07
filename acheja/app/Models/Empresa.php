<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'horario_atendimento',
        'situacao',
        'user_id',
    ];
    use HasFactory;
}
