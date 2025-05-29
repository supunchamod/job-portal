<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Candidate',
            'email' => 'candiddate@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'candidate'
        ]);

        User::create([
            'name' => 'Employer',
            'email' => 'employer@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'employer'
        ]);
    }
}
