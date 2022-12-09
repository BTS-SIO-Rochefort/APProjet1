<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word(10)    ,
            'texte' => $this->faker->paragraph (1),
            'numero' => $this->faker->numberBetween (0,60),
            'date' => $this->faker-> date,
            'modif' => $this->faker->boolean,
        ];
    }
}
