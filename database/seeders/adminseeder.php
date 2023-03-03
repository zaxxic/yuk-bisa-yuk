<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'udin',
            'email'=>'reno@gamil.com',
            'role'=>'adminweb',
            'status'=>'aktif',
            'password'=>'123',
            'gambar'=>'as',
            'logo'=>'asd',
            'kode_pos'=>'12332',
            'koordinat'=>'sad12',
        ]);
    }
}
