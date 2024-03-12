<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->randomElement(['Trenitalia','Italo','FS','FER','FSE']),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->ean13(),
            'number_of_carriages' => fake()->numberBetween(8, 25),
            'in_time' => fake()->boolean(), //OPPURE rand(0,1)
            'canceled' => fake()->boolean(), //OPPURE rand(0,1)
        ];
    }
}
