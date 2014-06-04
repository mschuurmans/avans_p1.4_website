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
		$scores = DB::select('select * from highscores ORDER BY score DESC');

		return View::make('highscores', compact('title', 'scores'));
	}

	public function highscore_add($name, $score)
	{
		DB::insert('insert into highscores (name,score) values (?, ?)', array($name, $score));
		return "highscore added";
	}	
	
	public function top_highscore()
	{
		$scores = DB::select("select * FROM highscores ORDER BY score DESC LIMIT 5");
		//foreach($scores as 
		return Response::json($scores);	
	}


}
