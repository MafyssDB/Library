<?php

namespace App\Http\Controllers\Main;

use App\Filters\BookFilter;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index(BookFilter $filter)
    {
        $books = Book::filter($filter)->paginate(9);
        $categories = Category::all();
        return view('main.index', compact('books','categories'));
    }

    public function show(Book $book)
    {
        return view('main.show', compact('book'));
    }

    public function getFile(Book $book)
    {
        $file = File::get('storage/' . $book->file);


        return view('main.file', compact('file'));

    }
}
