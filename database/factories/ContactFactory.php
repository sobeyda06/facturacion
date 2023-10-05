<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'identification' => $this->faker->numberBetween(1000000000, 9999999999),
            'measurer' => $this->faker->numberBetween(10, 100),
            'current_reading' => $this->faker->numberBetween(10, 100),
            'previous_reading' => $this->faker->numberBetween(10, 100),
            'monthly_consumption' => $this->faker->numberBetween(10, 100),
            'amount_payable' => $this->faker->numberBetween(10, 100),
            'arrears' => $this->faker->numberBetween(10, 100),
            'location' => $this->faker->address(),
        ];
    }
}
