<?php

class Base_exercisesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('base_exercises')->truncate();

		$base_exercises = array(
			[
			"exercise_id" => 5,
			"name" => "pushup"
			],
			[
			"exercise_id" => 15,
			"name" => "squat"
			],
			[
			"exercise_id" => 25,
			"name" => "pullup"
			],
			[
			"exercise_id" => 35,
			"name" => "leg raise"
			],
			[
			"exercise_id" => 46,
			"name" => "bridge"
			],
			[
			"exercise_id" => 55,
			"name" => "handstand pushup"
			]
		);

		// Uncomment the below to run the seeder
		DB::table('base_exercises')->insert($base_exercises);
	}

}
