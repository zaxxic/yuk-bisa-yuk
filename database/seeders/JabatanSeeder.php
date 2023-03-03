<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Jabatan::create([
            'jabatan' => 'Ketua',
        ]);
        Jabatan::create([
            'jabatan' => 'Wakil Ketua',
        ]);
        Jabatan::create([
            'jabatan' => 'Sekretaris',
        ]);
        Jabatan::create([
            'jabatan' => 'Bendahara',
        ]);
        Jabatan::create([
            'jabatan' => 'Anggota',
        ]);
    }
}
