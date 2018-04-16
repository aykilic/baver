<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class fatura extends Migration
{

    public function up() {
        Schema::create('fatura', function (Blueprint $table) {
            $table->increments('fatid');
            $table->string('fattar',15);

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
        Schema::drop('fatura');
    }
}