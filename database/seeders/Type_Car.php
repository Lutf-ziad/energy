<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

 use App\Models\Prize as ModelsPrize;
use App\Models\TypeCart as Models;
use App\Models\User;
use Illuminate\Database\Seeder;

class Type_Car extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  Models::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
