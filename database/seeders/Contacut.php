<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contacut as ModelsContacut;
use App\Models\Storge;
use App\Models\User;
use Faker\Generator as FakerGenerator;
use Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Contacut extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  ModelsContacut::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
