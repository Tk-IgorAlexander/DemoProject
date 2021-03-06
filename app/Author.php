<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';

	protected $fillable = [
        'first_name', 'last_name'
    ];
    //

    public function books()
    {
    	return $this->hasMany('App\Book', 'author_id', 'id');
    }
}
