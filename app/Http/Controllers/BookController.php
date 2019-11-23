<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function index(){
        //mengambil data dari tabel toko
        $book = book::paginate(10);
        //mengirim data keview
        return view('index',['book'=>$book]);

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Book::create([
    		'title' => $request->title,
            'author' => $request->author,
            'date_published' => $request->dateb,
            'number_ofpages' => $request->pages,
            'type_ofbooks'=> $request->type
    	]);
 
    	return redirect('/book');
    }

    public function edit($id)
    {
       $book = Book::find($id);
       return view('edit', ['book' => $book]);
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->date_published = $request->dateb;
        $book->number_ofpages = $request->pages;
        $book->type_ofbooks= $request->type;
        $book->save();
        return redirect('/book');
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/book');
    }
    //
}
