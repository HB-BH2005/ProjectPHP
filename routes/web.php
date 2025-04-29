<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CheatSheetController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LessonContentController;

//
// Public Routes
//
Route::get('/', fn() => view('Home'))->name('home');
Route::get('/contact', fn() => view('Contact'))->name('contact');
Route::get('/about', fn() => view('About'))->name('about');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


// Levels and Subjects (Public)
Route::get('/levels', [LevelController::class, 'index'])->name('levels.index');
Route::get('/levels/{slug}', [LevelController::class, 'show'])->name('levels.show');
Route::get('subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');
Route::get('lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');


//
// User Routes (Authenticated Users)
//

//========================User Routes==============================================


// Admin Routes - Grouped and protected by 'auth' and 'admin' middleware
Route::middleware(['auth', 'admin']) // Ensure only authenticated admin users can access these routes
    ->prefix('admin') // All admin routes will be prefixed with '/admin'
    ->group(function () {
        // Admin Home
        Route::get('/admin', fn() => view('admin.home'))->name('admin.home');

        // Admin: Users Management
        Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

        // Admin: Levels Management
        Route::get('levels', [LevelController::class, 'adminIndex'])->name('admin.levels.index');
        Route::get('levels/create', [LevelController::class, 'create'])->name('admin.levels.create');
        Route::post('levels', [LevelController::class, 'store'])->name('admin.levels.store');
        Route::get('levels/{id}/edit', [LevelController::class, 'edit'])->name('admin.levels.edit');
        Route::put('levels/{id}', [LevelController::class, 'update'])->name('admin.levels.update');
        Route::delete('levels/{id}', [LevelController::class, 'destroy'])->name('admin.levels.destroy');

        // Admin: Subjects Management
        Route::prefix('subjects')->group(function () {
            Route::get('/', [SubjectController::class, 'adminIndex'])->name('admin.subjects.index');
            Route::get('/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
            Route::post('/', [SubjectController::class, 'store'])->name('admin.subjects.store');
            Route::get('/{id}/edit', [SubjectController::class, 'edit'])->name('admin.subjects.edit');
            Route::put('/{id}', [SubjectController::class, 'update'])->name('admin.subjects.update');
            Route::delete('/{id}', [SubjectController::class, 'destroy'])->name('admin.subjects.destroy');
        });

        // Admin: Lessons Management
        Route::prefix('lessons')->group(function () {
            Route::get('/', [LessonController::class, 'index'])->name('admin.lessons.index');
            Route::get('/create', [LessonController::class, 'create'])->name('admin.lessons.create');
            Route::post('/', [LessonController::class, 'store'])->name('admin.lessons.store');
            Route::get('/{id}/edit', [LessonController::class, 'edit'])->name('admin.lessons.edit');
            Route::put('/{id}', [LessonController::class, 'update'])->name('admin.lessons.update');
            Route::delete('/{id}', [LessonController::class, 'destroy'])->name('admin.lessons.destroy');
        });

        // Admin: Lesson Content Management
        Route::prefix('lesson_contents')->group(function () {
            Route::get('/', [LessonContentController::class, 'index'])->name('admin.lesson_contents.index');
            Route::get('/create', [LessonContentController::class, 'create'])->name('admin.lesson_contents.create');
            Route::post('/', [LessonContentController::class, 'store'])->name('admin.lesson_contents.store');
            Route::get('/{id}/edit', [LessonContentController::class, 'edit'])->name('admin.lesson_contents.edit');
            Route::put('/{id}', [LessonContentController::class, 'update'])->name('admin.lesson_contents.update');
            Route::delete('/{id}', [LessonContentController::class, 'destroy'])->name('admin.lesson_contents.destroy');
        });

        // Admin: Logout
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
