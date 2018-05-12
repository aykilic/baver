<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fisturuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fisturu')->insert([
        ['fisturuid' => 1, 'fisturuad' => "SATIŞ"],
        ['fisturuid' => 2, 'fisturuad' => "ALIŞ"],

    ]);
    }
}
