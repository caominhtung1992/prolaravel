<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public static function all()
    {
    	return DB::table('users')->get();
    }
    public static function getByUserName($username)
    {
        return DB::table('users')->where('username','=',$username)->first();
    }
}
