<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyNewMoviesController;

Route::get('/movies', [MyNewMoviesController::class, 'indexM'])->name('movies.index');
Route::get('/tvshows', [MyNewMoviesController::class, 'indexS'])->name('tvshows.index');
