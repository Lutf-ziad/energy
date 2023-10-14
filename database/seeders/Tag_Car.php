<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

 use App\Models\Car as ModelsPrize;
use App\Models\Tag;
use App\Models\Tag_car as ModelsTag_car;
use App\Models\User;
use Illuminate\Database\Seeder;

class Tag_Car extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  ModelsTag_car::factory(10)->create();
    }
}
