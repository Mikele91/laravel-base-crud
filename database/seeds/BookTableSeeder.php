<?php

use Illuminate\Database\Seeder;
use App\Book;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books= config("comics");
        foreach($books as $book){
            $newBook = new Book();
            $newBook->title= $book["title"];
            $newBook->description =$book["description"] ;
            $newBook->thumb =$book["thumb"];
            $newBook->price =$book["price"];
            $newBook->series =$book["series"];
            $newBook->sale_date =$book["sale_date"];
            $newBook->type =$book["type"];
            $newBook->save();
        }
    }
}
