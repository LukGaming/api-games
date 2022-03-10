<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilUser extends Model
{
    protected $filliable = [
        'id',
        'name',
        'birth_date',
        'caminho_imagem_perfil',
        'user_id'
    ];
}
