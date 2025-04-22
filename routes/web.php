<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('Home');
})->name('home');





Route::get('/contact', function () {
    return view('Contact');
})->name('contact');



Route::get('/about', function () {
    return view('About');
})->name('about'); 



use App\Http\Controllers\CourseController;

Route::get('/my-courses', [CourseController::class, 'index'])->name('My-courses');

use App\Http\Controllers\LevelController;

Route::get('/levels', [LevelController::class, 'index'])->name('levels.index'); // all levels

Route::get('/levels/{level}', [LevelController::class, 'show'])->name('levels.show'); // subjects for a level
