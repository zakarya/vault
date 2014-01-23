<?php

use Carbon\Carbon;
class GoalsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('goals')->truncate();

		$faker = Faker\Factory::create();
		$users = User::all();

		foreach($users as $user) {
			for($i = 0; $i < 6; $i++) {
				$goal = Goal::create(array(
						"user_id" => $user->id,
						"exercise_id" => $faker->numberBetween(1,60),
						"comment" => $faker->sentence(30),
						"sets" => $faker->randomNumber(1,5),
						"reps" => $faker->randomNumber(1,50),
						"accomplish_at" => Carbon::now()->addMonth(),
						"created_at" => Carbon::now(),
						"updated_at" => Carbon::now()
					)
				);
			}
		}

	}
}