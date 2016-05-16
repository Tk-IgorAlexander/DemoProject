<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //
    protected $table = 'publishers';

	protected $fillable = [
        'name', 'founded'
    ];

    public function books()
    {
    	return $this->hasMany('App\Book', 'publisher_id', 'id');
    }
    //
}
