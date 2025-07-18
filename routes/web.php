<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\File;


Route::get('/', [CourseController::class, 'home'])->name('home');
Route::view('/contactus', 'contactus')->name('contactus');
Route::view('/aboutus', 'aboutus')->name('aboutus');

Route::get('/gallery', function () {
    $imagePaths = File::files(public_path('images/gallery'));
    $images = collect($imagePaths)->map(fn($file) => 'images/gallery/' . $file->getFilename());
    return view('gallery', compact('images'));
})->name('gallery');

// Dynamic Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course_id}', [CourseController::class, 'show'])->name('courses.show');
