<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Auth\LoginController;

//
// Public Routes
//
Route::get('/home', fn() => view('Home'))->name('home');
Route::get('/contact', fn() => view('Contact'))->name('contact');
Route::get('/about', fn() => view('About'))->name('about');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Levels and Subjects (Public)
Route::get('/levels', [LevelController::class, 'index'])->name('levels.index');
Route::get('/levels/{slug}', [LevelController::class, 'show'])->name('levels.show');
Route::get('/subjects/{id}', [SubjectController::class, 'show'])->name('subjects.show');
// Optional: if you want to list all subjects on one page
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');

//
// User Routes (Authenticated Users)
//
Route::get('/my-courses', [CourseController::class, 'index'])->name('my-courses');

//
// Admin Routes
//
Route::get('/admin', fn() => view('admin.home'))->name('admin');

// Admin: Other Static Pages
Route::get('/admin/courses', fn() => view('admin.courses'))->name('admin.courses');
Route::get('/admin/users', fn() => view('admin.users'))->name('admin.users');
Route::get('/admin/messages', fn() => view('admin.messages'))->name('admin.messages');

// Admin: Levels Management
Route::get('/admin/levels', [LevelController::class, 'adminIndex'])->name('admin.levels.index');
Route::get('/admin/levels/create', [LevelController::class, 'create'])->name('admin.levels.create');
Route::post('/admin/levels', [LevelController::class, 'store'])->name('admin.levels.store');
Route::get('/admin/levels/{id}/edit', [LevelController::class, 'edit'])->name('admin.levels.edit');
Route::put('/admin/levels/{id}', [LevelController::class, 'update'])->name('admin.levels.update');
Route::delete('/admin/levels/{id}', [LevelController::class, 'destroy'])->name('admin.levels.destroy');

// Admin: Subjects Management
Route::prefix('admin/subjects')->group(function () {
    Route::get('/', [SubjectController::class, 'adminIndex'])->name('admin.subjects.index');
    Route::get('/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
    Route::post('/', [SubjectController::class, 'store'])->name('admin.subjects.store');
    Route::get('/{id}/edit', [SubjectController::class, 'edit'])->name('admin.subjects.edit');
    Route::put('/{id}', [SubjectController::class, 'update'])->name('admin.subjects.update');
    Route::delete('/{id}', [SubjectController::class, 'destroy'])->name('admin.subjects.destroy');
});

//// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
