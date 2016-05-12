<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

use App\Http\Requests;

class BookController extends Controller
{
    //
    public function showBooks(Request $request)
    {
        
    	return view('book.allbooks', [
    		'books' => Book::join('authors', 'books.author_id', '=', 'authors.id')->orderBy('authors.last_name','asc')->orderBy('authors.first_name','asc')
						->get()
    		]);
    }
}
