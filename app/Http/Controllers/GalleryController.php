<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class GalleryController extends Controller
{
    public function index()
    {
        $books = Book::paginate(12);
        $title = 'Books Gallery';
        return view('gallery', compact('books', 'title'));
    }
}
