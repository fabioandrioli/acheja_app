<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'arquivo',
        'situacao',
        'valor',
        'situacao',
        'user_id',
    ];
}
