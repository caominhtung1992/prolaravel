<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function listuser()
    {
    	$users = Articles::all();
    	//return view('admin.users');
    	return view("admin.users")->with("users", $users);
    }
}
