<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    protected $table = 'user_types';

        protected $fillable = [
	    	'name',
	    	'access_level',
	    ];

    public function users()
    {
    	return $this->hasMany('App\User', 'user_type_id', 'id');
    }
}
