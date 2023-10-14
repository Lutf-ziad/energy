<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Car;
use App\Models\Car_sign;
use App\Models\Prize;
use App\Models\Storge;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
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
            'car_signs_id' => $this->faker->randomElement(Car_sign::all()->pluck('id')->toArray()),
            // 'is_user_included' => $this->faker->boolean(),
            'is_active' => $this->faker->randomElement([1, 0, 1]),

        ];
    }
}
