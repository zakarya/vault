<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaseExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('base_exercises', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('exercise_id')->unsigned();
			$table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
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
		Schema::drop('base_exercises');
	}

}
