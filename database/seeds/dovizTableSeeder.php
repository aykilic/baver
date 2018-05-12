<?php

use Illuminate\Database\Seeder;

class dovizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doviz')->insert([
            ['did' => 1, 'dad' => "TL"],
            ['did' => 2, 'dad' => "USD"],
            ['did' => 3, 'dad' => "EURO"],

        ]);
    }
}
