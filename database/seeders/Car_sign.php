<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

 use App\Models\Car as ModelsPrize;
use App\Models\Car_sign as ModelsCar_sign;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class Car_sign extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  ModelsCar_sign::factory(10)->create();
    }
}
