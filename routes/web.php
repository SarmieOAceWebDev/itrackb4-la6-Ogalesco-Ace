<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/subjects/filter/{value?}', [SubjectController::class, 'filter'])
    ->name('subjects.filter');

Route::resource('subjects', SubjectController::class)
    ->only(['index', 'show']);