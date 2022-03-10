<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadImagesProduct extends Model
{
    protected $fillable = [
        'id',
        'caminho_imagem_produto',
        'id_produto'
    ];
}
