<?php

use Illuminate\Database\Seeder;

class olayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        DB::table('olay')->insert([
            ['olayid' => 1, 'olayad' => "TAMAMLANDI"],
            ['olayid' => 2, 'olayad' => "YOLDA"],
            ['olayid' => 3, 'olayad' => "İRSALİYELENDİ"],
            ['olayid' => 4, 'olayad' => "FATURALANDI"],

        ]);

    }
}
