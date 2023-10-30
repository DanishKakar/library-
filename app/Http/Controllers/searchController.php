<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class searchController extends Controller
{
    //
            /**
     * search the specified resource from storage.
     */
    public function searchbook(Request $request)
    {
        // return $request;
           // Get the search value
        $search = $request->input('search');
        // Search in the name column from the categories table
        $books = Book::where('name', 'LIKE', "%{$search}%")
            ->orWhere('author', 'LIKE', "%{$search}%")
            ->orWhere('salary', 'LIKE', "%{$search}%")
            ->paginate(10);
        $total = $books->sum('salary');

        // Return the resluts 
        return view('backend.magazines.magazines-list', compact('books', 'total'));
    }

    public function report(Request $request)
    {
        // return $request;
           // Get the search value
        $fdate = $request->input('fdate');
        $sdate = $request->input('sdate');
        // Search in the date column from the books table
        
            $books = Book::whereBetween('date', [$fdate, $sdate])->paginate(10);
            $total = $books->sum('salary');
        
        
        // Return the resluts 
        return view('backend.books.books-list', compact('books', 'total'));

    }

    public function report2(Request $request)
    {
       
        return view('backend.magazines.reports');

    }

    public function liveSearch(Request $request) {
        // $output = "";
        // $no = 1;
        // $books = Book::where('name', 'like', '%'.$request->search.'%')
        //         ->orWhere('author', 'like', '%'.$request->search.'%')
        //         ->orWhere('salary', 'like', '%'.$request->search.'%')->paginate(5);

        // foreach($books as $book){

        //     $output.=
        //     '<tr>
        //         <td>'.$book->id.'</td>
        //         <td>'.$book->name.'</td>
        //         <td>'.$book->author.'</td>
        //         <td>'.$book->date.'</td>
        //         <td>'.$book->salary.'</td>
        //         <td>'.'
                
        //         <button type="submit" style="border:none"  class="badge badge-secondary editbtn" value="'.$book->id.'">
        //             <i class="bi bi-pencil-square"> </i>
        //         </button>
                
        //         <button style="border:none"  class="badge badge-danger" data-toggle="modal"
        //             data-deleteid="'.$book->id.'" data-target="#delete">
        //             <i class="bi bi-trash"> </i>
        //         </button>
                
        //         '.'</td>
                
        //     </tr>';
        // }

        // return response($output);
    }

}
