<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        Book::create($request->all());

        return redirect()->back()->with(['success' => 'Libro correttamente aggiunto']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->back()->with(['success'=>'Libro modificato correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with(['success'=>'Libro eliminato correttamente']);
    }

    public function manage(Book $book)
    {
        return view('books.manage', ['book'=>$book]);
    }

    public function borrow(Request $request, Book $book )
    {
        
        $book->update($request->all());
        return redirect()->route('books.index')->with(['success'=>'Noleggio aggiunto']);
    }
}
