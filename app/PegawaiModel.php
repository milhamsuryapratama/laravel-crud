<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected  $primaryKey = 'pegawai_id';
    protected $fillable = ['pegawai_nama','pegawai_jk','pegawai_jabatan','pegawai_umur','pegawai_alamat'];
    public $incrementing = false;
    public $timestamps = false;
}
