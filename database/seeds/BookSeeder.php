<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = config('comics');
        foreach ($books as $book) {
            $new_book = new Book();
            $new_book->title = $book['title'];
            $new_book->description = $book['description'];
            $new_book->thumb = $book['thumb'];
            $new_book->price = $book['price'];
            $new_book->series = $book['series'];
            $new_book->sale_date = $book['sale_date'];
            $new_book->type = $book['type'];

            $new_book->save();
        }
    }
}
