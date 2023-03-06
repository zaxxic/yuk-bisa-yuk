<?php

namespace App\Imports;

use App\Models\resident;
use Maatwebsite\Excel\Concerns\ToModel;

class DataPendudukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new resident([
            'nama' => $row[1],
            'jk' => $row[2],
            'agama' => $row[3],
            'tanggal' => $row[4],
            'alamat' => $row[5],
            'pendididkan' => $row[6],
            'status' => $row[7],
        ]);
        // $table->string('nama');
        // $table->string('jk');
        // $table->string('agama');
        // $table->date('tanggal');
        // $table->string('alamat');
        // $table->string('pendidikan');
        // $table->string('status');
    }
}
