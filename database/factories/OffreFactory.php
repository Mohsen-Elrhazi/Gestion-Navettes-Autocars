<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offre>
 */
class OffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_city' => fake()->city,
            'end_city' => fake()->city,
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'available_seats' => fake()->numberBetween(0, 50), // Nombre de places disponibles
            'total_seats' => fake()->numberBetween(50, 100), // Nombre total de places
            'description' => fake()->sentence(10), // Description aléatoire de l'autocar
        ];
    }
}