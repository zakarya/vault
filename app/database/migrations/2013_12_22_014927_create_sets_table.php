<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sets', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('workout_id')->unsigned();
			$table->integer('reps');
			$table->integer('goal');
			$table->integer('actual');
			$table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
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
		Schema::dropIfExists('sets');
	}

}
