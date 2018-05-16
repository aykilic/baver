<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Numarala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numarala', function (Blueprint $table) {
        $table->increments('numaralaid');
            $table->tinyInteger('evrakturuid');
            $table->Integer('sayi');
            $table->tinyInteger('uzunluk');
            $table->tinyInteger('mod');
            $table->date('tarih1');
            $table->date('tarih2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('numarala');}

}
