<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Car_signFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            'default-coffee-shop-logo1.png',
            'default-coffee-shop-logo2.png',
            'default-coffee-shop-logo3.png',
            'default-coffee-shop-logo4.png',
            'default-coffee-shop-logo5.png',
        ];

        return [
            'picture' => $this->faker->randomElement($images),
            'active' => $this->faker->randomElement([1, 0, 1]),
         ];
    }
}
