<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Генерировать файл и картинку тут, потом в фабрике поменять поля image и file
        Storage::disk('public')->put('file/file.txt', 'Здесь будет текст книги, из файла, который загрузится через админ панель, а пока что, это для примера. Много писать не буду, но можете проверить, загрузив файл через админку');
        Category::factory(30)->create();
        Book::factory(20)->create();


        // \App\Models\User::factory(10)->create();

        User::factory()->create([
             'name' => 'SuperUser',
             'email' => 'test@example.com',
             'password' => 12341234,
             'role' => 1,
         ]);
    }
}
