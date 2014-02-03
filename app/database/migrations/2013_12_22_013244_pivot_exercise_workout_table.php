<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotExerciseWorkoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_workout', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('exercise_id')->unsigned();
			$table->integer('workout_id')->unsigned();
			$table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
			$table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
			// $table->timestamps();
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercise_workout');
	}

}
