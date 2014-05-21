<?php

class UsersController extends BaseController
{
	public function sayHi($id)
	{
		return View::make('say_hi', compact('id'));
	}
	
	public function adminSayHi($id)
	{
		return View::make('users/admin_say_hi', compact('id'));
	}
}
