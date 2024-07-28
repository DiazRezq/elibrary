<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->string('author');
            $table->string('isbn')->nullable();
            $table->integer('published_year');
            $table->integer('pages');
            $table->unsignedBigInteger('category_id');

            $table->unsignedBigInteger('publisher_id');
            $table->string('cover_image')->nullable();
            $table->text('synopsis')->nullable();
            $table->integer('stock');
            $table->integer('rental_price');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
