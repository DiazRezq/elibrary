<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::resource('books', BookController::class);

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('members', MemberController::class);
Route::get('members/{member}', [MemberController::class, 'show'])->name('members.show');
