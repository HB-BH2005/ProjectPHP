<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CourseController;

//
// 🌍 Public Routes (accessible à tous)
//
Route::get('/home', fn() => view('Home'))->name('home');
Route::get('/contact', fn() => view('Contact'))->name('contact');
Route::get('/about', fn() => view('About'))->name('about');

Route::get('/levels', [LevelController::class, 'index'])->name('levels.index');
Route::get('/levels/{slug}', [LevelController::class, 'show'])->name('levels.show');

//
// 👤 User Routes (utilisateur connecté)
//
Route::get('/my-courses', [CourseController::class, 'index'])->name('my-courses');

//
// 🔐 Admin Routes (dashboard et gestion)
//
Route::get('/admin', fn() => view('admin.home'))->name('admin');

Route::get('/admin/subjects', fn() => view('admin.subjects'))->name('admin.subjects');
Route::get('/admin/courses', fn() => view('admin.courses'))->name('admin.courses');
Route::get('/admin/users', fn() => view('admin.users'))->name('admin.users');
Route::get('/admin/messages', fn() => view('admin.messages'))->name('admin.messages');

// Levels (Admin gestion)
Route::get('/admin/levels', [LevelController::class, 'adminIndex'])->name('admin.levels.index');
Route::get('/admin/levels/create', [LevelController::class, 'create'])->name('admin.levels.create');
Route::post('/admin/levels', [LevelController::class, 'store'])->name('admin.levels.store');
Route::get('/admin/levels/{id}/edit', [LevelController::class, 'edit'])->name('admin.levels.edit');
Route::put('/admin/levels/{id}', [LevelController::class, 'update'])->name('admin.levels.update');
Route::delete('/admin/levels/{id}', [LevelController::class, 'destroy'])->name('admin.levels.destroy');
