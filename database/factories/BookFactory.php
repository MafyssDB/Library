<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'Author' => $this->faker->name,
            'description' => $this->faker->text(200),
            'file' => 'file/file.txt' ,
            'image' => $this->faker->imageUrl(),
            'category_id' => Category::get()->random()->id
        ];
    }
}
