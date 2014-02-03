<?php

use Carbon\Carbon;
class ExerciseWorkoutTableSeeder extends Seeder {

	public function run()
	{
		DB::table('exercise_workout')->truncate();

		$faker = Faker\Factory::create();

		$workouts = Workout::all();
		$users = User::all();
		$baseExercises = Exercise::where('is_parent', 1)->get();
		foreach($users as $user) {
			$bases = $baseExercises;
			$count = 0;
			$level = 1;
			foreach ($workouts as $workout) {

				for($i = 0; $i < 2; $i++) {
					$base = $bases->pop();
					if ($base) {
						$exercise = Exercise::where('parent_id', $base->id)
										->where('level', $level)->first();
					} else {
						$count++;
						$bases = Exercise::where('is_parent', 1)->get();
					}

					if ($exercise) {
						$workout->exercises()->save($exercise);
					}
					if($count % 3 === 0) {
						$level++;
					}
				}
			}
		}
	}

		// DB::table('exercise_workout')->insert();
}