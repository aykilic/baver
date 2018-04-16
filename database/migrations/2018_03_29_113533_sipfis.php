<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sipfis extends Migration
{

    public function up() {
        Schema::create('sipfis', function (Blueprint $table) {
            $table->increments('sipfisid');
            $table->string('sipfistar',10);
            $table->tinyInteger('fisturu');
            $table->tinyInteger('fisfid');
            $table->tinyInteger('depo');
            $table->tinyInteger('doviz');
            $table->tinyInteger('durumid');
            $table->string('aciklama',300);


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
        Schema::drop('sipfis');
    }
}

