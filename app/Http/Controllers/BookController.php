<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use App\Repositories\CountryRepository;
use App\Http\Requests;

class BookController extends Controller
{
	protected $books;
    protected $countries;
	public function __construct(BookRepository $books, CountryRepository $countries)
    {
        $this->books = $books;
        $this->countries = $countries;        
    }
    //
    public function showBooks(Request $request)
    {
        
    	return view('book.allbooks', [
    		'books' => $this->books->getBooks()
    		]);
    }

    public function addBook()
    {
        return view('book.addBook', [
            'countries' => $this->countries->getCountries()
            ]);
    }


    public function storeBook(Request $request)
    {
        //Falta validar
        /*$this->validate($request, [
            'name' => 'required|max:255',
        ]);*/
        Book::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id,
            'country_id' => $request->country_id,
            'stock' => $request->stock,
            'isbn' => $request->isbn,
            'year' => $request->year,
            'image_path' => $request->image_path,
            'desc' => $request->desc
            ]);
        return redirect('/admin/books');
    }
}
