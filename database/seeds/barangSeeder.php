<?php

use Illuminate\Database\Seeder;
use App\barang;
class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 0;$i<10;$i++){
            barang::create(array(
                    "nama_barang" => "Laptop".$i,
                    "stok" => "50",
                    "harga" => "4000000"
                ));
        }
    }
}
