<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedLogs extends Model
{
    //
    protected $table = 'issued_logs';

    protected $fillable = [
        'book_id', 'user_id', 'issued_at', 'return_time'
    ];

    public function book()
    {
        return $this->hasOne('App\Book', 'id', 'book_id');
    }

    public function user_id()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
