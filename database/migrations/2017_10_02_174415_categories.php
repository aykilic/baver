<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $t) {
            $t->increments('id');

            // Nested Set related fields
            $t->integer('parent_id')->nullable();
            $t->integer('lft')->nullable();
            $t->integer('rgt')->nullable();
            $t->integer('depth')->nullable();

            // ... other fields which may feel suitable

            // Indexes
            $t->index('parent_id');
            $t->index('lft');
            $t->index('rgt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
