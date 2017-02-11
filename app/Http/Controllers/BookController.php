<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // kintamasis, kuris grazina visas knygas is duomenu bazes
    $books = Book::paginate(10);

    // grazinam view ir keliam kintamaji $books
        return view('books.index')->withBooks($books);
    }
        
     /**
     * Show the form for creating a new resource.
     *
    * @return \Illuminate\Http\Response
     */


     public function create()
    {
        return view('books.create');
    }
        
    /**
    * Store a newly created resource in storage.
    *
    )   * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // tikriname duomenis is inputu

        $this->validate($request, array(
            'title' => 'required|max:255',
            'releasedate' => 'required|integer',
            'author' => 'required|max:255',
            'genre' => 'required|max:255',
            ));

        // talpiname duomenis is inputu

        $book = new Book;

        $book->title = $request->title;
        $book->releasedate = $request->releasedate;
        $book->author = $request->author;
        $book->genre = $request->genre;

        $book->save();

        // nukreipiam i puslapi

        return redirect()->route('books.show', $book->id)->with('sekminga', 'Knyga sėkmingai įkelta.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}

