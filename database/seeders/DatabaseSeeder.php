<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Product;
use App\Models\Storge_prize;
use App\Models\User;
use Database\Seeders\Blog as SeedersBlog;
use Database\Seeders\Branch as SeedersBranch;
use Database\Seeders\Car as SeedersCar;
use Database\Seeders\Storge_prize as SeedersStorge_prize;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
             AdminSeeder::class,
            SeedersBlog::class,
            Contacut::class,
            CategorySeeder::class,
            ProductSeeder::class


        ]);

    }
}
