<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'books';

	protected $fillable = [
        'title', 'desc', 'isbn', 'image_path', 'stock', 'author_id', 'publisher_id', 'year', 'country_id'
    ];
    //
    public function author()
    {
        return $this->hasOne('App\Author', 'author_id', 'id');
    }

    public function country()
    {
        return $this->hasOne('App\Country', 'country_id', 'id');
    }

    public function publisher()
    {
        return $this->hasOne('App\Publisher', 'publisher_id', 'id');
    }
}
