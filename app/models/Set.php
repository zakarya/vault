<?php

class Set extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'goal' => 'required'
		);
}
