<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sipfissatir extends Migration
{
    public function up() {
        Schema::create('sipfissatir', function (Blueprint $table) {
            $table->increments('sipfisatirid');
            $table->string('numara');
            $table->tinyInteger('fissid')->nullable();
            $table->Integer('miktar')->nullable();
            $table->tinyInteger('birim')->nullable();
            $table->double('bfiyat')->nullable();
            $table->tinyInteger('kdv')->nullable();
            $table->double('tutar')->nullable();

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
        Schema::drop('sipfissatir');
    }
}
