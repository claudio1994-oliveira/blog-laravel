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

Route::get('/', function (){
    $posts = \App\Models\Post::all();
    return view('welcome', compact('posts'));
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/create', \App\Livewire\Post\Create::class)->name('create');
    Route::get('/{post}/edit', \App\Livewire\Post\Edit::class)->name('edit');
    Route::delete('/{post}', \App\Http\Controllers\DeletePostController::class)->name('destroy');
})->middleware(['auth']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
