<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {

});

Route::group(
    [
        'middleware' => ['auth'],
        'prefix' => '/blogs',
        'namespace' => '',
    ],
    function () {
        Route::get('/index', [BlogController::class, 'index']);
        Route::get('/create', [BlogController::class, 'create']);
        Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');


    }
);

require __DIR__.'/auth.php';
