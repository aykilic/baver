<?php

use Illuminate\Database\Seeder;

class durumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durum')->insert([
            ['durumid' => 1, 'durumad' => "SATIŞ"],
            ['durumid' => 2, 'durumad' => "ALIŞ"],

        ]);
    }
}
