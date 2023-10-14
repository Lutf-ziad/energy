<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog as ModelsBlog;
use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  ModelsBlog::factory(10)->create();

    }
}
