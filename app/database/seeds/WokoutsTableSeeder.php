<?php

use Carbon\Carbon;
class WorkoutsTableSeeder extends Seeder {


	public function run()
	{
		DB::table('workouts')->truncate();

		$faker = Faker\Factory::create();
		for ($i = 0; $i < 10; $i++) {
			$workout = Workout::create(
				array(
					"comment" => $faker->sentence(25),
					"created_at" => Carbon::now(),
					"updated_at" => Carbon::now()
				)
			);
		}

		// DB::table('workouts')->insert($workouts);
	}
}