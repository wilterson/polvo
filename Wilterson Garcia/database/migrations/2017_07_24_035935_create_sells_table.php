<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sells', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('sell_cod');
            $table->string('buyer', 50);
            $table->date('date')->default(date('Y-m-d'));
            $table->double('total', 8,2);

            $table->softDeletes();
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
		Schema::drop('sells');
	}

}
