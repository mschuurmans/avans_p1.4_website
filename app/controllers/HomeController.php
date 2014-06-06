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
		if($score > 0)
		{
			DB::insert('insert into highscores (name,score) values (?, ?)', array($name, $score));
			return "highscore added";
		}
		else
		{
			return "Zero not added";
		}
	}	
	
	public function top_highscore($amount)
	{
		$scores = DB::select("select * FROM highscores ORDER BY score DESC LIMIT " . $amount);
		//foreach($scores as 
		return Response::json($scores);	
	}
	
	public function repo()
	{
		$title = $this->title_base . 'Repo';
		return View::make('repo', compact('title'));	
	}

}
