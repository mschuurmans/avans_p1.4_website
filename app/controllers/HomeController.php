<?php

class HomeController extends BaseController 
{
	public function homepage()
	{
		$title = 'Essperience | homepage';
		return View::make('homepage', compact('title'));
	}

	public function games()
	{
		$title = 'Essperience | games';
		return View::make('games', compact('title'));
	}

	public function stream()
	{
		$title = 'Essperience | Live Stream';
		return View::make('stream', compact('title'));
	}

}
