<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdmineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'Admin ',
                'email' => 'admin@e.com',
                'password' => Hash::make('admin'),
//                'created_at' => now(),
//                'updated_at' => now(),
            ],

        ]);
    }
}
