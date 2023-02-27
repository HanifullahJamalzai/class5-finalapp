<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'footer_description' => fake()->paragraph(),
            'address' => fake()->address(),
            'phone'   => fake()->phoneNumber(),
            'email'   => fake()->email()
        ];
    }
}
