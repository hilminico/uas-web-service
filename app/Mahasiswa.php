<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'mahasiswa';

    // protected $fillable = [
    //     'nim', 'nama', 'telp', 'email', 'alamat', 'fakultas', 'prodi'
    // ];
    protected $fillable = [
        'nim','nama','jenkel','nohp','alamat'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
