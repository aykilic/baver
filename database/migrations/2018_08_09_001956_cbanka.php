<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class cbanka extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbanka', function (Blueprint $table) {
            $table->increments('cbid');
            $table->integer('fid')->nullable();
            $table->integer('baid')->nullable();
            $table->integer('did')->nullable();
            $table->string('iban',32)->nullable();
            $table->string('bsube',25)->nullable();
            $table->string('bsubek',11)->nullable();
            $table->string('hesapno',11)->nullable();


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
        Schema::drop('cbanka');
    }
}
