<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// https://laraveldaily.com/laravel-8-vue-3-crud-composition-api/
Route::view('/{any}', 'dashboard')->middleware(['auth'])->where('any', '.*');
