<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function showUsers(Request $request)
    {
        
    	return view('auth.allusers', [
    		'users' => User::orderBy('created_at','asc')
						->get()
    		]);
    }
}
