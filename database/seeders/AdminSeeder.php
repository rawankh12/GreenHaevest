<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('users')->insert([
            'firstName' => 'george',
            'lastName' => 'zagh',
            'email' => 'george0@gmail.com',
            'password' => bcrypt('12341234a'),
            'phone' => '0987654321',
            'point' => 0
        ]);
    }
}
