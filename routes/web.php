<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');

Route::get('/subjects/featured', [SubjectController::class, 'featured'])
    ->name('subjects.featured');

Route::get('/subjects/filter/{value?}', [SubjectController::class, 'filter'])
    ->name('subjects.filter');

Route::get('/subjects/{id}', [SubjectController::class, 'show'])
    ->name('subjects.show');