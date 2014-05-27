<?php

class HomeController extends BaseController 
{
	private $title_base = 'Essperience | ';
	public function homepage()
	{
		$title = $this->title_base . 'homepage';
		return View::make('homepage', compact('title'));
	}

	public function games()
	{
		$title = $this->title_base . 'games';
		return View::make('games', compact('title'));
	}

	public function stream()
	{
		$title = $this->title_base . 'Live Stream';
		return View::make('stream', compact('title'));
	}

	public function highscores()
	{
		$title = $this->title_base . 'Highscores';
		return View::make('highscores', compact('title'));
	}

	public function highscore_add($name, $score)
	{
		return "highscore added";
	}	

}
