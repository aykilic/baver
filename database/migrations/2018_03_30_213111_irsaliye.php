<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class irsaliye extends Migration
{

    public function up() {
        Schema::create('irsaliye', function (Blueprint $table) {
            $table->increments('irsid');
            $table->string('irstar',15);

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
        Schema::drop('irsaliye');
    }
}