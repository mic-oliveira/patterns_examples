<?php

namespace Database\Factories;

use App\Models\Boleto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Boleto>
 */
class BoletoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vencimento' => $this->faker->dateTime('-1 day'),
            'valor' => $this->faker->numerify('####'),
        ];
    }
}
