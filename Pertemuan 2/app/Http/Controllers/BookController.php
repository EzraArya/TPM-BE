<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('createBook');
    }

    public function store(Request $request){
        Book::create([
            'Judul' => $request->Judul,
            'PublishDate' => $request->PublishDate,
            'Author' => $request->Author,
            'Stock' => $request->Stock,
        ]);
        
        //"Nama dari model' -> $request->name dari form
        //"Judul" -> $request->Judul
        
        return redirect('/home');
    }

    public function index()
    {
        $books = Book::all();

        return view('welcome', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);


        return view('showbook', compact('book'));
    }
}
