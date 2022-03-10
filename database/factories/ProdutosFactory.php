<?php

namespace Database\Factories;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    protected $model = Produtos::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'valor' => $this->faker->randomDigit().'00',
            'descricao' => $this->faker->text(1000),
        ];
    }
}
