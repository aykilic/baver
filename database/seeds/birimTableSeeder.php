<?php

use Illuminate\Database\Seeder;

class birimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('birim')->insert([
          //  ['bid' => 1, 'bad' => "KG"],
            ['bid' => 2, 'bad' => "ADET"],

        ]);
    }
}
