<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

	protected $fillable = [
        'code', 'name'
    ];

    public function books()
    {
    	return $this->hasMany('App\Book', 'country_id', 'id');
    }
    //
}
