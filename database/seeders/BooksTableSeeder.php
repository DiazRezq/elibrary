<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'code' => 'B001',
            'title' => 'Book One',
            'author' => 'Author One',
            'isbn' => '1234567890',
            'published_year' => 2020,
            'pages' => 100,
            'category_id' => 1,
            'publisher_id' => 1,
            'cover_image' => 'https://via.placeholder.com/150',
            'synopsis' => 'Synopsis One',
            'stock' => 10,
            'rental_price' => 100
        ]);

        Book::create([
            'code' => 'B002',
            'title' => 'Book Two',
            'author' => 'Author Two',
            'isbn' => '1234567891',
            'published_year' => 2021,
            'pages' => 200,
            'category_id' => 2,
            'publisher_id' => 2,
            'cover_image' => 'https://via.placeholder.com/150',
            'synopsis' => 'Synopsis Two',
            'stock' => 20,
            'rental_price' => 200
        ]);

        Book::create([
            'code' => 'B003',
            'title' => 'Book Three',
            'author' => 'Author Three',
            'isbn' => '1234567892',
            'published_year' => 2022,
            'pages' => 300,
            'category_id' => 3,
            'publisher_id' => 3,
            'cover_image' => 'https://via.placeholder.com/150',
            'synopsis' => 'Synopsis Three',
            'stock' => 30,
            'rental_price' => 300
        ]);

        Book::create([
            'code' => 'B004',
            'title' => 'Book Four',
            'author' => 'Author Four',
            'isbn' => '1234567893',
            'published_year' => 2023,
            'pages' => 400,
            'category_id' => 4,
            'publisher_id' => 4,
            'cover_image' => 'https://via.placeholder.com/150',
            'synopsis' => 'Synopsis Four',
            'stock' => 40,
            'rental_price' => 400
        ]);

        Book::create([
            'code' => 'B005',
            'title' => 'Book Five',
            'author' => 'Author Five',
            'isbn' => '1234567894',
            'published_year' => 2024,
            'pages' => 500,
            'category_id' => 5,
            'publisher_id' => 5,
            'cover_image' => 'https://via.placeholder.com/150',
            'synopsis' => 'Synopsis Five',
            'stock' => 50,
            'rental_price' => 500
        ]);
    }
}
