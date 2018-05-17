<?php

use Illuminate\Database\Seeder;

class numaralaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numarala')->insert([

            ['numaralaid'=> 2, 'evrakturuid' => 2, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 3, 'evrakturuid' => 3, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 4, 'evrakturuid' => 4, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 5, 'evrakturuid' => 5, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 6, 'evrakturuid' => 6, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 7, 'evrakturuid' => 7, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 8, 'evrakturuid' => 8, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],
            ['numaralaid'=> 9, 'evrakturuid' => 9, 'sayi'=>1 ,'uzunluk'=>7,'mod'=>1],

        ]);
    }
}
