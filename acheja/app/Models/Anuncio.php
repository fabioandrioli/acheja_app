<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'imagem',
        'quantidade_clique',
        'quantidade_visualizacao',
        'descricao',
        'link',
        'data_inicio',
        'data_fim',
        'situacao',
        'user_id',
        'empresa_id',
    ];
}
