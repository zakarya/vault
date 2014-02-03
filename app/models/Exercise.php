<?php

class Exercise extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'level' => 'required',
	);

	public function users()
	{
		return $this->belongsToMany('User');
	}

	public function sets() {
		return $this->hasMany('Set');
	}

	public function loadSets($workoutId)
	{
		return $this->load(array('sets' => function ($query) use ($workoutId) {
				$query->where('workout_id', $workoutId);
		}));
	}
}
