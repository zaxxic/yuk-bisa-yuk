<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class kt_structure extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jabatans(){
        return $this -> belongsTo(Jabatan::class, 'id_jabatan','id');
    }
}
