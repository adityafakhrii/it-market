<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    public $timestamps = true;
    public $incrementing = true;
    protected $primaryKey = "id_pembelian";
    protected $table = "pembelian";
    protected $fillable = ["id_a","status","no_resi","img_url"];
}
