<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type()
    {
        return $this->belongsTo('App\UserType', 'user_type_id', 'id');
    }

    public function issued_logs()
    {
        return $this->hasMany('App\IssuedLogs', 'user_id', 'id');
    }


    //This function returns de access level
    public function getType()
    {
        return $this->type->access_level;
    }

    public function getAccessLevel()
    {
        return $this->type->access_level;
    }

    public function isAdmin()
    {
        if ($this->getAccessLevel() == 0){
            return true;
        }
        return false;
    }

    public function isVerified()
    {
        return $this->verification_status;
    }

    public function approveUser()
    {
        $this->verification_status = true;
        return $this->save();
    }
}
