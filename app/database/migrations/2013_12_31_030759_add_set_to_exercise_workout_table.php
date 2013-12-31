<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSetToExerciseWorkoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_workout', function(Blueprint $table) {
			$table->integer('set')->after('workout_id');
			$table->integer('reps')->after('set');
			$table->integer('goal')->after('reps');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_workout', function(Blueprint $table) {
			$table->dropColumn('set');
			$table->dropColumn('reps');
			$table->dropColumn('goal');
		});
	}

}
