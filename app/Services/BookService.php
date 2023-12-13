<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookService
{
    public function store($data)
    {
        $data['image'] = Storage::disk('public')->put('images/', $data['image']);
        $data['file'] = Storage::disk('public')->put('file/', $data['file']);
        Book::firstOrCreate($data);
    }

    public function update($data, $book)
    {
        if (isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('images/', $data['image']);
        }
        if (isset($data['file'])){
            $data['file'] = Storage::disk('public')->put('file/', $data['file']);
        }
        $book->update($data);
        return $book;
    }
}
