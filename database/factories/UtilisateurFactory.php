<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom'  => $this->faker->firstName,
            'dateNaiss' => $this->faker->date,
            'classe' => $this->faker->randomElement (['1er année','2e année']),
            'statut' => $this->faker->randomElement (['User']),
            'numTel' => $this->faker->phoneNumber,
            'adresseMail'=> $this->faker->email
        ];
    }
}
