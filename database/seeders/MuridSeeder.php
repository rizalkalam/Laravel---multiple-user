<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Murid::create([
            // 'id'=>'1',
            'username'=>'kalam',
            'email'=>'kalam@gmail.com',
            'password'=>bcrypt('kalam123'),
            'nis'=>'0441',
            'role'=>3
        ]);

        Murid::create([
            // 'id'=>'2',
            'username'=>'zumar',
            'email'=>'zumar@gmail.com',
            'password'=>bcrypt('zumar123'),
            'nis'=>'0442',
            'role'=>3
        ]);
    }
}
