<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sablonadi extends Migration
{

	public function up() {
		Schema::create('sablonad', function (Blueprint $table) {
			$table->increments('sbladid');
			$table->string('sblad',25);
			$table->integer('sblturuid');





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
		Schema::drop('sablonad');
	}
}
