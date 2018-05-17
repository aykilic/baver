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
            $table->tinyInteger('evrakturuid')->nullable();
            $table->Integer('sayi')->default(1)->nullable();
            $table->tinyInteger('uzunluk')->default(5)->nullable();
            $table->tinyInteger('mod')->nullable();
            $table->date('tarih1')->nullable();
            $table->date('tarih2')->nullable();

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
