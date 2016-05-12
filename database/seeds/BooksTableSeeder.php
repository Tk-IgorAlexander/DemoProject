<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Author::class, 20)->create();
        factory(App\Publisher::class, 15)->create();
        factory(App\Book::class, 50)->create();
    }
}
