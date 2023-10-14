<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Car;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tag_CarFactory extends Factory
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
            'tag_id' => $this->faker->randomElement(Tag::all()->pluck('id')->toArray()),
        ];
    }
}
