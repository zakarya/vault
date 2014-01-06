<?php

class Goal extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function exercise() {
		return $this->belongsTo('exercise');
	}
}
