<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesGames extends Model
{
    protected $filliable = [
        'id',
        'caminho_imagem_game',
        'games_id'
    ];
}
