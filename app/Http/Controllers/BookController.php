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
    //ADMIN
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'integer|exists:publishers,id',
            'country_id' => 'integer',
            'stock' => 'integer|max:1000',
            'isbn' => 'digits:13|unique:books',
            'year' => 'digits:4',
            'image_path' => 'active_url'
        ]);
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
        return redirect(url('/admin/books'));
    }

    public function editBook(Request $request, Book $book)
    {
        return view('book.modBook', [
            'book' => $book
            ]);
    }

    public function modBook(Request $request, Book $book)
    {
        $this->validate($request, [
            'stock' => 'integer|max:1000',
            'image_path' => 'active_url'
        ]);
        $book->stock = $request->stock;
        $book->image_path = $request->image_path;
        $book->save();
        return redirect(url('/admin/books'));
    }

    //USER

    public function searchBooks(Request $request)
    {
        
        return view('book.searchBooks', [
            'books' => $this->books->findBook('************')
            ]);
    }

    public function findBook(Request $request)
    {
        
        return view('book.searchBooks', [
            'books' => $this->books->findBook($request->str)
            ]);
    }

    public function viewBook(Request $request, Book $book)
    {
        return view('book.viewBook', [
            'book' => $book,
            'date_selected' => false,
            'date_stock' => 0
            ]);
    }

    public function checkAvailability(Request $request, Book $book)
    {
        $request->flash();
        return view('book.viewBook', [
            'book' => $book,
            'date_selected' => true,
            'date_stock' => $book->stock - $this->books->countIssues($book->id, str_replace('/', '-', $request->doi))
            ]);
    }
}

