<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::paginate(10);
        $total = $books->sum('salary');
        return view('backend.books.books-list', compact('books', 'total'));
    }
    public function list()
    {
        //
        $books = Book::all();
        return view('backend.books.list_book', compact('books'));
    }
    public function index1()
    {
        //
        $books = Book::paginate(10);
        $total = $books->sum('salary');
        return view('backend.magazines.magazines-list', compact('books', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    
        // return view('backend.books.create-book');
        return view('backend.books.add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request->all();
        $book = new Book();

        $request->validate( [
            'name' => 'required|max:255|min:5',
            'author' => 'required',
            'date' => 'required|date',
            'salary' => 'required',
        ]);


        $book->name = $request->name;
        $book->author = $request->author;
        $book->date = $request->date;
        $book->salary = $request->salary;

        $book->save();
        return back()->with('message', '!!!Book Added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
        $book = Book::find($id);
        return response($books = $book, $status = 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        $book_id = $request->input('book_id');
        $book = Book::find($book_id);

        // validate the requests.....
        $request->validate( [
            'name' => 'required|max:255|min:5',
            'author' => 'required',
            'date' => 'required|date',
            'salary' => 'required',
        ]);

        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->date = $request->input('date');
        $book->salary = $request->input('salary');

        $book->update();

        return back()->with('message', '!!!Record Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
       $data = Book::find($id);
       $data->delete();
        return back()->with('message','!Deleted Successfully');

    }
    public function delete(String $id)
    {
        //

        return $id;
        // return response()->json(['success'=>true, 'tr'=>'tr_'.$id]);

    }


}
