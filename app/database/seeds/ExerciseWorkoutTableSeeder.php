<?php

use Carbon\Carbon;
class ExerciseWorkoutTableSeeder extends Seeder {

	public function run()
	{
		DB::table('exercise_workout')->truncate();

		$faker = Faker\Factory::create();

		$workouts = Workout::all();
		foreach ($workouts as $workout) {
			$workout->exercises()->sync(array($faker->randomNumber(1,60) => array(
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				),
				$faker->randomNumber(1,60) => array(
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				)));
		}

		// DB::table('exercise_workout')->insert();
	}
}