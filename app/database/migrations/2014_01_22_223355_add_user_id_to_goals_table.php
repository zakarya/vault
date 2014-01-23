<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddUserIdToGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('goals', function(Blueprint $table) {
			$table->integer('user_id')->after('id')->unsigned();
			$table->text('comment')->after('exercise_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goals', function(Blueprint $table) {
			// $table->dropColumn('user_id');
			// Schema::drop('users');
		});
	}

}
