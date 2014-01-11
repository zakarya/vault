<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNameToBaseExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('base_exercises', function(Blueprint $table) {
			$table->string('name')->after('exercise_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('base_exercises', function(Blueprint $table) {
		// 	$table->dropColumnIfExists('name');
		// });
	}

}
