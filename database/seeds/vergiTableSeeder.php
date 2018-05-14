<?php

use Illuminate\Database\Seeder;

class vergiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vergi')->insert([
            ['vid' => 1, 'vor' => "18"],
            ['vid' => 2, 'vor' => "8"],
            ['vid' => 3, 'vor' => "1"],

        ]);
    }
}
