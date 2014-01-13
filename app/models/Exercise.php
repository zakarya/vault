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
}
