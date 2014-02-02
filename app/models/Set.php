<?php

class Set extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function exercise()
	{
		return $this->belongsTo('Exercise');
	}

	public function workout()
	{
		return $this->belongsTo('Workout');
	}
}
