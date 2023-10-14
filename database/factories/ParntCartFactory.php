<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Car;
use App\Models\Prize;
use App\Models\Storge;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParntCartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'car_id' => $this->faker->randomElement(Car::all()->pluck('id')->toArray()),
            // 'is_user_included' => $this->faker->boolean(),
            // 'is_active' => $this->faker->boolean(),
        ];
    }
}
