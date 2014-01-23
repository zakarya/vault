<?php

use Carbon\Carbon;
class ExerciseWorkoutTableSeeder extends Seeder {

	public function run()
	{
		DB::table('exercise_workout')->truncate();

		$faker = Faker\Factory::create();

		$workouts = Workout::all();
		foreach ($workouts as $workout) {
			$workout->exercises()->sync(array(1 => array(
					'set' => 1,
					'reps' => 10,
					'goal' => 10,
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				),
				2 => array(
					'set' => 2,
					'reps' => 10,
					'goal' => 10,
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				)));
		}

		// DB::table('exercise_workout')->insert();
	}
}