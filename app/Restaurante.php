<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //
    protected $fillable = [
    	'name', 'email', 'password', 'last_name',
	];
}
