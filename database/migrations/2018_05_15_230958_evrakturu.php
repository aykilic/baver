<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evrakturu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evrakturu', function (Blueprint $table) {
            $table->increments('evrakturuid');
            $table->string('evrakturuad', 15)->nullable();
            $table->timestamps();


//            $table->increments('evrakturuid');
//            $table->string('evrakturuad', 15);
//            $table->tinyInteger('uzunluk');
//            $table->tinyInteger('mod');
//
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evrakturu');}
    }
