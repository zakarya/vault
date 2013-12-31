<?php

class Workout extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function exercises() {
		return $this->belongsToMany('Exercise')->withPivot('set', 'reps', 'goal');
	}

	public function sets() {
		return $this->hasMany('Set', 'workout_id');
	}
}
