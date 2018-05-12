<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sablonturu extends Migration
{

	public function up() {
		Schema::create('sablon_turu', function (Blueprint $table) {
			$table->increments('sblturuid');
			$table->string('sblturuad',20);

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
		Schema::drop('sablon_turu');
	}
}