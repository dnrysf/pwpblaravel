<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//post index
Route::get('/', App\livewire\posts\index::class)->name('posts.index');
//post create
Route::get('/create', App\Livewire\Posts\Create::class)->name('posts.create');
//posts edit
Route::get('/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');