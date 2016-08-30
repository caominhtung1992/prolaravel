<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Requests;

	class DemoController extends Controller
	{
         public function login()
         {
         	return view('auth.login');
         }
	}