<?php

namespace Database\Seeders;

use App\Models\pkk_structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PKKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pkk_structure::create([
            'id_jabatan' => '1',
            'nama' => 'Pio',
            'gambar' => 'village.png',
        ]);
        pkk_structure::create([
            'id_jabatan' => '2',
            'nama' => 'Fani',
            'gambar' => 'struktur.png',
        ]);
        pkk_structure::create([
            'id_jabatan' => '3',
            'nama' => 'Yuni',
            'gambar' => 'village.png',
        ]);
        pkk_structure::create([
            'id_jabatan' => '4',
            'nama' => 'Ila',
            'gambar' => 'struktur.png',
        ]);
        pkk_structure::create([
            'id_jabatan' => '5',
            'nama' => 'Joko',
            'gambar' => 'village.png',
        ]);
    }
}
