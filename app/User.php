<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	 protected $table = 'user';
     protected $fillable = ['nama', 'username', 'password',];
	 protected $hidden = ['password', 'remember_token',];
}
