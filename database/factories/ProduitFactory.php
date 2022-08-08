<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'prix' => 4500,
            'categorie_id'=> rand(1,5)
        ];
    }
}
