<?php

namespace Database\Seeders;

use App\Models\kt_structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kt_structure::create([
            'id_jabatan' => '1',
            'nama' => 'Hadi',
            'gambar' => 'struktur.png',
        ]);
        kt_structure::create([
            'id_jabatan' => '2',
            'nama' => 'Pina',
            'gambar' => 'village.png',
        ]);
        kt_structure::create([
            'id_jabatan' => '3',
            'nama' => 'Kunti',
            'gambar' => 'struktur.png',
        ]);
        kt_structure::create([
            'id_jabatan' => '4',
            'nama' => 'Cilo',
            'gambar' => 'struktur.png',
        ]);
        kt_structure::create([
            'id_jabatan' => '5',
            'nama' => 'Didi',
            'gambar' => 'village.png',
        ]);
    }
}
