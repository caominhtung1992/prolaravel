<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;

	class ViewController extends Controller
	{
		public function getReturn()
		{
			return view('return');
		}
		public function getVariable()
		{
			$var = view('return');
			return $var;
		}
	}