<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = null;
    protected $table = "detail_pembelian";
    protected $fillable = ["id_pembelian","id_barang","qty"];
}
