<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotExerciseUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exercise_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('exercise_user');
	}

}
