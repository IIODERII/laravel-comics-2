<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('/comics');
});

Route::resource('comics', App\Http\Controllers\ComicController::class);

// Route::get('/comics', function () {
//     $comics = config('db.comics');
//     return view('comics', compact('comics'));
// })->name('comics');

// Route::get('/comics/{index}', function ($index) {
//     $comics = config('db.comics');
//     $comic = $comics[$index];
//     return view('partials.view_comic', compact('comic', 'index', 'comics'));
// })->name('view_comic');

// Route::get('/create', function () {
//     return view('partials.create');
// })->name('create');

// Route::get('/comics/{index}/edit', function () {
//     return view('partials.edit');
// })->name('edit');

