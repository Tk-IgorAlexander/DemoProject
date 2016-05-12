<?php

namespace App\Repositories;

use App\Book;
use App\Author;

class BookRepository
{
    /**
     * Get all of the books order by author's name.
     *
     * @return Collection
     */
    public function getBooks()
    {
        return Book::join('authors', 'books.author_id', '=', 'authors.id')
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
}