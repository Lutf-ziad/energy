<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Storge;
use App\Models\User;
use Faker\Generator as FakerGenerator;
use Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(FakerGenerator $faker)
    {
        return User::create([
            'name'              => $faker->name,
            'email'             => 'demo@demo.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
        ]);
    }
}
