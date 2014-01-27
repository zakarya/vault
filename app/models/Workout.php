<?php

use Carbon\Carbon;
class Workout extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
			'comment' => 'required'
		);

	public function exercises() {
		return $this->belongsToMany('Exercise')->withPivot('set', 'reps', 'goal');
	}

	public function setExercises($sets) {
		foreach($sets as $set) {
			$exercise = Exercise::find($set['id']);
			$this->exercises()->save($exercise, array(
					'set' => $set['set'],
					'reps' => $set['reps'],
					'goal' => $set['goal'],
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
			));
		}
	}
}
