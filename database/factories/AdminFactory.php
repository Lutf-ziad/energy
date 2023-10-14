<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'password' => bcrypt('password'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->regexify('/^('.config('app.COUNTRY_KEYS').")\d{7}$/"),
            'type' => $this->faker->randomElement(['pos', 'owner', 'pos']),
            'active' => $this->faker->randomElement([1, 0, 1]),

        ];
    }
}
