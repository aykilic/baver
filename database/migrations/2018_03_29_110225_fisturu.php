<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class fisturu extends Migration
{

    public function up() {
        Schema::create('fisturu', function (Blueprint $table) {
            $table->increments('fisturuid');
            $table->string('fisturuad',10);


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
        Schema::drop('fisturu');
    }
}
