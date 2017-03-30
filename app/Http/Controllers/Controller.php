<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function validator(array $data)
	{
    	return Validator::make($data, [
	        'name' => 'required|max:255',
        	'last_name' => 'required|max:255',
        	'email' => 'required|email|max:255|unique:users',
        	'password' => 'required|min:6|confirmed',
    	]);
	}


	protected function create(array $data)
	{
	    return User::create([
        	'name' => $data['name'],
        	'last_name' => $data['last_name'],
        	'email' => $data['email'],
        	'password' => bcrypt($data['password']),
    	]);
	}
}
