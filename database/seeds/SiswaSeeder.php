<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<10;$i++){
            Siswa::create(array(
                    "name" => "Contoh User",
                    "address" => "Jl. Street No Number",
                    "tgl_lahir" => "2000-10-11",
                    "nis" => "19023890".$i
                ));
        }
    }
}
