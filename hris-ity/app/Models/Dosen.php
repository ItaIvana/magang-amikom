<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['id','status_dosen','jabatan_fungsional','homebase','jabatan_struktural','pegawai_id','creted_at','updated_at'];
}
