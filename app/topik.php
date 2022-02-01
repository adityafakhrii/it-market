<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topik extends Model
{

    public $timestamps = true;
    public $incrementing = true;
    public $primary_key = "id_topik";
    public $table = "topik";
    public $fillable = ["nama_topik","harga","nama_pengajar"];

}
