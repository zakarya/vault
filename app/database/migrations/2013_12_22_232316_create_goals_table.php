<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goals', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exercise_id')->unsigned();
			$table->integer('reps');
			$table->integer('sets');
			$table->timestamp('accomplish_at');
			$table->timestamps();
			$table->foreign('exercise_id')->references('id')->on('exercises');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('goals');
	}

}
