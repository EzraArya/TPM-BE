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
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Judul . '_' . $request->Author . '.'.$extension;
        $request->file('image')->storeAs('/public/Book/', $filename);

        Book::create([
            'Judul' => $request->Judul,
            'PublishDate' => $request->PublishDate,
            'Author' => $request->Author,
            'Stock' => $request->Stock,
            'image' => $filename
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

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        ($id);
        return view('editBook', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Judul . '_' . $request->Author . '.'.$extension;
        $request->file('image')->storeAs('/public/Book/', $filename);

        Book::findOrFail($id)->update([
            'Judul' => $request->title,
            'PublishDate' => $request->PublishDate,
            'Author' => $request->author,
            'Stock' => $request->stock,
            'image'=> $filename
        ]);

        return redirect('/home');
    }

    public function delete($id)
    {
        Book::destroy($id);

        return redirect('/home');
    }
}
