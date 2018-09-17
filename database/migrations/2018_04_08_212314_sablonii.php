<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sablonii extends Migration
{

	public function up() {
		Schema::create('sablon', function (Blueprint $table) {
			$table->increments('sblid');
			$table->integer('sblturuid');
			$table->string('sblad',15);
			$table->string('id',15);
			$table->string('data-name',15);
			$table->string('text',100);
			$table->integer('top');
			$table->integer('left');
			$table->integer('width');
			$table->integer('height');
            $table->string('stylealign',15);
            $table->integer('text');
            $table->integer('ttop');
            $table->integer('tleft');
            $table->integer('twidth');
            $table->integer('theight');


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
		Schema::drop('sablon');
	}
}
