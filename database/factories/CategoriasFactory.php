<?php

namespace Database\Factories;

use App\Models\Categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriasFactory extends Factory
{
    protected $model = Categorias::class;

    public function definition(): array
    {
    	
    	    return [
                'nome_categoria' => $this->faker->name(),
                'user_id' => 0,
    	];
    	
    }
}
