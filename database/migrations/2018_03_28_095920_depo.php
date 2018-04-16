<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class depo extends Migration
{

    public function up() {
        Schema::create('depo', function (Blueprint $table) {
        $table->increments('depoid');
        $table->string('depoad',30);
        $table->string('dadres',100);
        $table->string('dil',30);
        $table->string('dilce',30);
        $table->string('deposta',35);
        $table->string('dcep',30);
        $table->string('dsabit',30);
        $table->string('dtcno',30);
        $table->string('dvdno',30);
        $table->string('dvad',30);
        $table->string('dyad',30);
        $table->string('dytel',30);

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
        Schema::drop('depo');
    }
}
