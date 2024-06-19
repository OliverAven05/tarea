<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Libro::where('titulo', 'LIKE', "%{$query}%")->get();

        return view('search-results', compact('books'));
    }
}
