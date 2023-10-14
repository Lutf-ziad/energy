<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order as Models ;

use Illuminate\Database\Seeder;

class Order extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return Models::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
