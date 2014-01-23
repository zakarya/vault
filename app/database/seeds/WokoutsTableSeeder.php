<?php

use Carbon\Carbon;
class WorkoutsTableSeeder extends Seeder {


	public function run()
	{
		DB::table('workouts')->truncate();

		$faker = Faker\Factory::create();
		$users = User::all();

		foreach($users as $user) {
			for ($i = 0; $i < 10; $i++) {
				$workout = Workout::create(
					array(
						"user_id" => $user->id,
						"comment" => $faker->sentence(25),
						"created_at" => Carbon::now(),
						"updated_at" => Carbon::now()
					)
				);
			}
		}


		// DB::table('workouts')->insert($workouts);
	}
}