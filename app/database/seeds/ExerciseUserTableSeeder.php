<?php

class ExerciseUserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('exercise_user')->truncate();

		$exerciseuser = array(
			[
				"exercise_id" => "7",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			],
			[
				"exercise_id" => "16",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			],
			[
				"exercise_id" => "25",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			],
			[
				"exercise_id" => "34",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			],
			[
				"exercise_id" => "43",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			],
			[
				"exercise_id" => "52",
				"user_id" => "1",
				"created_at" => new DateTime,
				"updated_at" => new DateTime
			]

		);

		// Uncomment the below to run the seeder
		DB::table('exercise_user')->insert($exerciseuser);
	}

}
