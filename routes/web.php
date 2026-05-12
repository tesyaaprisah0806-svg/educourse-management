<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers.index');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');


Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');


Route::get('/student/{name?}', function ($name = 'Guest') {
    return "Hello " . $name;
})->name('student.greet');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Halaman Dashboard Admin";
    })->name('admin.dashboard');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::fallback(function () {
    return "Maaf, halaman yang anda cari tidak ditemukan (404).";
});