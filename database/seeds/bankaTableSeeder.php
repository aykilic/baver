<?php

use Illuminate\Database\Seeder;

class bankaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::table('bankalar')->insert([
            ['baid' => 1, 'bankad' => "GARANTİ"],
            ['baid' => 2, 'bankad' => "YAPIKREDİ"],
            ['baid' => 3, 'bankad' => "T.FİNANS"],
            ['baid' => 4, 'bankad' => "HALKBANK"],
            ['baid' => 5, 'bankad' => "AKBANK"],
        ]);
    }
}
