<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::create(['name' => 'Publisher One', 'code' => 'PUB1']);
        Publisher::create(['name' => 'Publisher Two', 'code' => 'PUB2']);
        Publisher::create(['name' => 'Publisher Three', 'code' => 'PUB3']);
        Publisher::create(['name' => 'Publisher Four', 'code' => 'PUB4']);
    }
}
