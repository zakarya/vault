<?php

use Carbon\Carbon;
class Workout extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function exercises() {
		return $this->belongsToMany('Exercise');
	}

	public function sets() {
		return $this->hasMany('Set');
	}

	public function createExercises($exercises, $workoutId) {
		foreach($exercises as $exercise) {
			$ex = Exercise::find($exercise['id']);
			$this->exercises()->save($ex);
			foreach($exercise['sets'] as $set) {
				$s = new Set($set);
				$s->exercise_id = $ex->id;
				$s->workout_id = $workoutId;
				$ex->sets()->save($s);
			}
		}
	}

}
