<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
    //    return view('book.index',
    //    [
    //     'books'=>auth()->user()->books
    //     ]);

       return view('book.index',
    ['books'=>Book::where('user_id',auth()->id())->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['string','min:3'],
            'genre '=>['string','min:3'],
            'image' => 'mimes:jpeg,bmp,png'
        ]);


      $newBook=Book::create([
           'title'=>$request->title,
           'genre'=>$request->genre,
           'user_id'=>auth()->id(),
       ]);
     

       if($request->image)  
       {          
           $request->image->store('images', 'public');            
           $newBook->update(['image' => $request->image->hashName()]);
       }

       return redirect('/books/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books/index'); 
    }
}
