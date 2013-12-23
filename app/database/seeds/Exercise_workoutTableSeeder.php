<?php

class Exercise_workoutTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('exercise_workout')->truncate();

		$exercise_workout = array(

		);

		// Uncomment the below to run the seeder
		DB::table('exercise_workout')->insert($exercise_workout);
	}

}
