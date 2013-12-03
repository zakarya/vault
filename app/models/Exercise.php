<?php

class Exercise extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'level' => 'required',
		'master' => 'required',
		'isMaster' => 'required'
	);
}
