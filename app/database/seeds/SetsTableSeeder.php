<?php

use Carbon\Carbon;
class SetsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sets')->truncate();

		$faker = Faker\Factory::create();

		$workouts = Workout::with('exercises')->get();
		$count = Exercise::count();
		foreach ($workouts as $workout) {

			$numSets = $faker->randomNumber(1,5);
			foreach($workout->exercises as $exercise) {
				for($i = 0; $i < $numSets; $i++) {
					$set = Set::create([
						'workout_id' => $workout->id,
						'exercise_id' => $exercise->id,
						'reps' => $faker->randomNumber(1, 50),
						'goal' => $faker->randomNumber(1, 50),
						'created_at' => Carbon::now(),
						'updated_at' => Carbon::now()
					]);
				}
			}

		}

		// Uncomment the below to run the seeder
		// DB::table('sets')->insert($sets);
	}

}
