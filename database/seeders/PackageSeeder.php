<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// The command line above is calling the class for inserting in database

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'name' => 'basic',
                'price' => 380000,
                'max_days' => 30,
                'max_users' => 1,
                'is_download' => 0,
                'is_4k' => 1,
                'created_at' =>now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'pro',
                'price' => 699000,
                'max_days' => 60,
                'max_users' => 3,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' =>now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'ultimate',
                'price' => 899000,
                'max_days' => 120,
                'max_users' => 10,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' =>now(),
                'updated_at' =>now()
            ]
        ]);
    }
}
