<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            // 'id'=>'1',
            'username'=>'Vitto',
            'email'=>'vitto@gmail.com',
            'password'=>bcrypt('vitto123'),
            // 'niy'=>'0111',
            // 'role'=>2
        ]);
    }
}
