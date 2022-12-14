<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sujet>
 */
class SujetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomTopic' => $this->faker->text(20),
            'tag' => $this->faker->text(5),
            'groupe'  => $this->faker->text(5)
        ];
    }
}
