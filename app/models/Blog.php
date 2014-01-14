<?php

class Blog extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'author' => 'required',
		'excerpt' => 'required',
		'body' => 'required',
		'image' => 'required'
	);
}
