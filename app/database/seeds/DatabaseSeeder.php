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

		// $this->call('UserTableSeeder');
		$this->call('ExercisesTableSeeder');
		$this->call('Exercise_workoutTableSeeder');
		$this->call('Base_exercisesTableSeeder');
		$this->call('UsersTableSeeder');
	}

}