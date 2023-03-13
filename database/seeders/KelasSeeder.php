<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            // 'id'=>'1',
            'nama_kelas'=>'8E Hamzah',
            'jumlah_siswa'=>30,
        ]);
        Kelas::create([
            // 'id'=>'1',
            'nama_kelas'=>'7E Al Fath',
            'jumlah_siswa'=>31,
        ]);
        Kelas::create([
            // 'id'=>'1',
            'nama_kelas'=>'8A Usamah',
            'jumlah_siswa'=>32,
        ]);
    }
}
