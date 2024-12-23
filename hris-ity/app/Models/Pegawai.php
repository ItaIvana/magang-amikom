<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['id','nik','no_pegawai','no_kk','pendidikan','jabatan','divisi','tmt','purna_tugas','status','created_at','updated_at'];
}

