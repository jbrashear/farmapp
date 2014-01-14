<?php 

class PagesController extends BaseController {

	public function home() 
	{
		
	$name = 'Bob';

	return View::make('home')->with('name', $name);
	}

	public function about()
	{
		return View::make('about');
	}
}