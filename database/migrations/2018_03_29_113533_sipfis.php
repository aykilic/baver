<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sipfis extends Migration
{

    public function up() {
        Schema::create('sipfis', function (Blueprint $table) {
            $table->increments('sipfisid');
            $table->string('sipfistar',10)->nullable();
            $table->tinyInteger('fisturu')->nullable();
            $table->tinyInteger('fisfid')->nullable();
            $table->tinyInteger('depo')->nullable();
            $table->tinyInteger('doviz')->nullable();
            $table->tinyInteger('durumid')->nullable();
            $table->tinyInteger('olayid')->nullable();
            $table->mediumInteger('numara')->nullable();

            $table->string('aciklama',300)->nullable();


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

