<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Configuração no model para fazer com que o laravel inteprete o 
    //Items como array e não como string (induzindo o tipo do dado)
    protected $casts = [
        'items'=>'array'
    ];
}
