<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class durum extends Migration
{

    public function up() {
        Schema::create('durum', function (Blueprint $table) {
            $table->increments('durumid');
            $table->string('durumad',15)->nullable();

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
        Schema::drop('durum');
    }
}
