<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProgressionsToExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercises', function(Blueprint $table) {
			$table->string('beginner')->after('level');
			$table->string('intermediate')->after('level');
			$table->string('progression')->after('level');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercises', function(Blueprint $table) {
			$table->dropColumn('beginner');
			$table->dropColumn('intermediate');
			$table->dropColumn('progression');
		});
	}

}
