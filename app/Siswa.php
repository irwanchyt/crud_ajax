<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Siswa;


class Siswa extends Model
{
    protected $table ='siswas';

    protected $fillable=[
        'name',
        'alamat',
        'jenis_kelamin'
    ];
}
