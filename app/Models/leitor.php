<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'idade',
        'cpf',
        'status',

    ];
}
