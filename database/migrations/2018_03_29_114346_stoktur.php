<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class stoktur extends Migration
{

    public function up() {
        Schema::create('stoktur', function (Blueprint $table) {
            $table->increments('stokturid');
            $table->string('stokturad',30);


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
        Schema::drop('stoktur');
    }
}
