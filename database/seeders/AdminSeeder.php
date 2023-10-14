<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'phone'    => '774070582',
            'type' => 'admin',
            'active' => 1,

        ]);
        DB::table('admins')->insert([
            'name' => 'owner',
            'password' => bcrypt('owner'),
            'phone'    => '774070582',
            'type' => 'owner',
            'active' => 1,

        ]);
        DB::table('admins')->insert([
            'name' => 'pos',
            'password' => bcrypt('pos'),
            'phone'    => '774070582',
            'type' => 'pos',
            'active' => 1,

        ]);

    }
}
