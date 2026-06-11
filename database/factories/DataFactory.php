<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnpj' => '33.589.582/0001-42',
            'whatsapp' => fake()->phoneNumber(),
            'phone' => fake()->phoneNumber()
        ];
    }
}
