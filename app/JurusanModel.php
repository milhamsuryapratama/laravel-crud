<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected  $primaryKey = 'jurusan_id';
    protected $fillable = ['jurusan_nama'];
    public $incrementing = false;
    public $timestamps = true;
}
