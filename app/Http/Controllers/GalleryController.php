<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class GalleryController extends Controller
{
    public function index()
    {
        $books = Book::paginate(12);
        $title = 'Books Gallery';
        return view('gallery', compact('books', 'title'));
    }

    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%{$request->term}%")->paginate(12);
        $title = $request->term . ' search results';
        return view('gallery', compact('books', 'title'));
    }

 
}
