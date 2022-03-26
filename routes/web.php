<?php

use App\Http\Livewire\Posts;
use App\Http\Livewire\PostShow;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // auth()->user()->assignRole('admin');
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function () {
    Route::get('/admin/posts', Posts::class)->name('posts.index');
});

Route::get('/posts/{slug}', PostShow::class)->name('posts.show');