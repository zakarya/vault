<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddParentIdToExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercises', function(Blueprint $table) {
			$table->integer('parent_id')->after('name');
			$table->string('parent_name')->after('parent_id');
			$table->boolean('is_parent')->after('parent_name');
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
			$table->dropColumn('parent_id');
			$table->dropColumn('parent_name');
			$table->dropColumn('is_parent');
		});
	}

}
