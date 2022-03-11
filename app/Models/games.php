<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    protected $filliable = [
        'id',
        'name',
        'release_year',
        'description',
        'type_of_games_id',
    ];
    public function images()
    {
        return $this->hasMany(ImagesGames::class);
    }
}
