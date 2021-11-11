<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view("books.index",compact("books"));
        // dd($books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $newBook = new Book();
        // $newBook->title= $data["title"];
        // $newBook->description =$data["description"] ;
        // $newBook->thumb =$data["thumb"];
        // $newBook->price =$data["price"];
        // $newBook->series =$data["series"];
        // $newBook->sale_date =$data["sale_date"];
        // $newBook->type = $data["type"];
        // $newBook->save();
        // se il nome della colonna è uguale al nome che ci arriva dal form possiamo nel model impostare i valori da passare e utilizzare 
        
        $newBook = Book::create($data);
        // dd($data);
        return redirect()->route("books.show",$newBook["id"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        // dipendent injection 
        // $book= Book::find($id);
        //oppure possiamo mettere nella funzione come paramatri  Book (il mnodel) e la variaile $book e fa già un controllo se la risorsa c'è !
        return view("books.show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book) //procacciamo il file
    {
        return view("books.edit",compact("book"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        $book->update($data);
        return redirect()->route("books.show",$book["id"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route("books.index");

    }
}
