<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            // 'id'=>'1',
            'username'=>'Joko Arianto',
            'email'=>'jokoarysbi@gmail.com',
            'password'=>bcrypt('mrjack123'),
            'niy'=>'0111',
            'role'=>2
        ]);

        Guru::create([
            // 'id'=>'2',
            'username'=>'Musfiq Amrullah',
            'email'=>'musfiqa@gmail.com',
            'password'=>bcrypt('mrmusfiq123'),
            'niy'=>'0112',
            'role'=>2
        ]);
    }
}
