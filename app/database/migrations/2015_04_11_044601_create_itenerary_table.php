<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIteneraryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itenerary', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('userid');
			$table->foreign('userid')->references('id')->on('users');
			$table->string('name');
			$table->float('review');
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
		Schema::drop('itenerary');
	}

}
