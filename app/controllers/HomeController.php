<?php

class HomeController extends BaseController 
{
	public function homepage()
	{
		$title = 'homepage';
		return View::make('homepage', compact('title'));
	}

}