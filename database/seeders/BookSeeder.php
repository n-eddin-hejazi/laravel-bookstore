<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $book1 = Book::create([
            'category_id' => Category::where('name', 'Business')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 1 - Business',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/1.png',
        ]);
        $book1->authors()->attach(Author::where('name', 'Fatima Fatima')->first());

        $book2 = Book::create([
            'category_id' => Category::where('name', 'Design')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 2 - Design',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/2.png',
        ]);
        $book2->authors()->attach(Author::where('name', 'Mohammad Mohammad')->first());

        $book3 = Book::create([
            'category_id' => Category::where('name', 'Freelancing')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 3 - Freelancing',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '25',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/3.png',
        ]);
        $book3->authors()->attach(Author::where('name', 'Omer Omer')->first());

        $book4 = Book::create([
            'category_id' => Category::where('name', 'Freelancing')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 4 - Freelancing',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '20',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/4.png',
        ]);
        $book4->authors()->attach(Author::where('name', 'Majed Majed')->first());

        $book5 = Book::create([
            'category_id' => Category::where('name', 'Marketing')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 5 - Marketing',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '13',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/5.png',
        ]);
        $book5->authors()->attach(Author::where('name', 'Fozi Fozi')->first());

        $book6 = Book::create([
            'category_id' => Category::where('name', 'Marketing')->first()->id,
            'publisher_id' => Publisher::where('name', 'Nour')->first()->id,
            'title' => 'Book 6 - Marketing',
            'description' => 'this is description, this is description, this is description, this is description, ',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '14',
            'isbn' => '100000000000',
            'cover_image' => 'images/covers/6.png',
        ]);
        $book6->authors()->attach(Author::where('name', 'Zaid Zaid')->first());
    }
}
