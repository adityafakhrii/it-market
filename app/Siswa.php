<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    public $incrementing = true;
    protected $primaryKey = "id";
    protected $table = "siswa";
    protected $fillable = ["name","address","tgl_lahir","nis"];
}
