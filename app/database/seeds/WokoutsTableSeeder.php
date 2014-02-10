<?php

use Carbon\Carbon;
class WorkoutsTableSeeder extends Seeder {


	public function run()
	{
		DB::table('workouts')->truncate();

		$faker = Faker\Factory::create();
		$users = User::all();
		foreach($users as $user) {
			$first = Carbon::now()->subMonths(3);
			for ($i = 0; $i < 19; $i++) {
				$workout = Workout::create(
					array(
						"user_id" => $user->id,
						"comment" => $faker->sentence(25),
						"date" => $first,
					)
				);
				$first = $first->addDays(3);
			}
		}


		// DB::table('workouts')->insert($workouts);
	}
}