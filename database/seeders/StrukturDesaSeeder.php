<?php

namespace Database\Seeders;

use App\Models\lembaga_structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        lembaga_structure::create([
            'gambar' => 'struktur.png',
        ]);
    }
}
