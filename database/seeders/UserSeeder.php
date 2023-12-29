<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// The command line above is calling the class for inserting in database
use Illuminate\Support\Facades\Hash;
// The command line above is calling the class for to encrypt or hash the password
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@bwa.com',
            'password' => Hash::make('mantapjiwa'),
            'phone_number' => '09890202',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
