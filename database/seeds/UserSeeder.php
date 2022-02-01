<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
        		"name" => "Contoh User",
                "email" => "user@email.com",
                "alamat" => "Jl. Street no 1",
                "level" => 0,
                "no_hp" => "08129301203",
        		"password" => ("inipass")
        	));
    }
}
