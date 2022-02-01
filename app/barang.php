<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $timestamps = true;
    public $incrementing = true;
    protected $primaryKey = "id_barang";
    protected $table = "barang";
    protected $fillable = ["img_url_barang","nama_barang","merk_barang","warna","jumlah_stok","harga","sisa"];
}