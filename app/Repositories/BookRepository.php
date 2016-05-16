<?php

namespace App\Repositories;

use App\Book;
use App\Author;
use App\Publisher;

class BookRepository
{
    /**
     * Repository for Book, Author and Publisher's class
     */
    public function getBooks()
    {
        return Book::join('authors', 'books.author_id', '=', 'authors.id')
                    ->select('books.*')
                    ->orderBy('authors.last_name','asc')
                    ->orderBy('authors.first_name','asc')
                    ->get();
    }

    /**
     * Find a book by its title or author
     */
    public function findBook($string)
    {
        return Book::join('authors', 'books.author_id', '=', 'authors.id')
                ->select('books.*')
                ->where('books.title', 'like', '%' . $string . '%')
                ->orWhere('authors.last_name', 'like', '%' . $string . '%')
                ->orWhere('authors.first_name', 'like', '%' . $string . '%')
                ->orderBy('authors.last_name','asc')
                ->orderBy('authors.first_name','asc')
                ->get();
    }

    public function getAuthors()
    {
        return Author::orderBy('last_name','asc')
                    ->orderBy('first_name','asc')
                    ->get();
    }
    public function countAuthors()
    {
        return Author::count();
    }
    public function countPublishers()
    {
        return Publisher::count();
    }
}