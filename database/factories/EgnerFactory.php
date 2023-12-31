<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EgnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Number' => $this->faker->randomElement([55, 5, 23]),
            'car_id' => $this->faker->randomElement(Car::all()->pluck('id')->toArray()),

        ];
    }
}
