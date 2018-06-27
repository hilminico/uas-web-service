<?php

namespace App\Http\Transformers;
use League\Fractal\TransformerAbstract;
use App\Http\Models\Student;
class MahasiswaTransformer extends TransformerAbstract
{   
    public function transform(Mahasiswa $field){
        return [
            'id'                => $field->id,
            'nim_mahasiswa'     => $field->nim, 
            'nama_mahasiswa'    => $field->nama,
            'jenkel_mahasiswa'  => $field->jenkel,
            'no_tel'            => $field->nohp,
            'address'           => $field->alamat
        ];
    }
}