<?php

namespace Database\Factories;

use App\Models\Barber_servies;
use App\Models\Branch;
use App\Models\ParntCart;
use App\Models\Prize;
use App\Models\Storge;
use App\Models\TypeCart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->regexify('/^('.config('app.COUNTRY_KEYS').")\d{7}$/"),
            'Perferable' => $this->faker->date(),
            'type_cart_id' => TypeCart::select('id')->get()->random()->id,
            'branche_id' => Branch::select('id')->get()->random()->id,
         ];
    }
}
