<?php

namespace Database\Seeders;

use App\Models\desa_profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        desa_profile::create([
            'gambar1' => 'struktur.png',
            'gambar2' => 'village.png',
            'gambar3' => 'struktur.png',
            'sejarah' => 'Desa sebagai unit paling rendah tingkatannya dalam struktur pemerintahan Indonesia telah ada sejak dulu dan bukan terbentuk oleh Belanda.',
            'visi' => '“DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA”',
            'misi' => 'Untuk mewujudkan Visi, Misi yang akan dilakukan adalah sebagai berikut : Melanjutkan program yang telah dilaksanakan dan memelihara',
            'batasutara'=> ' ',
            'batasselatan'=> ' ',
            'batastimur'=> ' ',
            'batasbarat'=> ' ',
        ]);
    }
}
