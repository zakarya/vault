<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$this->call('ExercisesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('WorkoutsTableSeeder');
		$this->call('GoalsTableSeeder');
		$this->call('ExerciseUserTableSeeder');
		$this->call('ExerciseWorkoutTableSeeder');
		$this->call('SetsTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}