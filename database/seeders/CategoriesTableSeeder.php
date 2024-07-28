<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Fiction', 'code' => 'FIC']);
        Category::create(['name' => 'Non-Fiction', 'code' => 'NFC']);
        Category::create(['name' => 'Science Fiction', 'code' => 'SFC']);
        Category::create(['name' => 'Fantasy', 'code' => 'FNT']);
        Category::create(['name' => 'Mystery', 'code' => 'MYS']);
        Category::create(['name' => 'Romance', 'code' => 'RMC']);
        Category::create(['name' => 'Horror', 'code' => 'HOR']);
    }
}
