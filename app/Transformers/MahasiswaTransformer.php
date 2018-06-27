<?php

namespace App\Transformers;

use App\Mahasiswa;

use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
    public function transform(Mahasiswa $mahasiswa)
    {
        return [
            'nim'           => $mahasiswa->nim, 
            'nama'          => $mahasiswa->nama,
            'jenkel'        => $mahasiswa->jenkel,
            'nohp'   => $mahasiswa->nohp,
            'alamat'       => $mahasiswa->alamat
        ];
    }
}