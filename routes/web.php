<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subjects/filter/{value?}', function ($value = null) {
    if ($value === null) {
        return redirect()->route('subjects.index');
    }

    return redirect()->route('subjects.index', [
        'code' => $value
    ]);
});

Route::resource('subjects', SubjectController::class)
    ->only(['index', 'show', 'create', 'store']);

