<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('homepage');
})->name('home');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');


Route::get('/gallery', function () {
    $imagePaths = File::files(public_path('images/gallery'));

    $images = collect($imagePaths)->map(function ($file) {
        return 'images/gallery/' . $file->getFilename();
    });

    return view('gallery', compact('images'));
})->name('gallery');

Route::prefix('courses')->group(function () {
    Route::view('/accounting', 'courses.accounting')->name('courses.accounting');
    Route::view('/dca', 'courses.dca')->name('courses.dca');
    Route::view('/web-development-design', 'courses.web_design')->name('courses.web_design');
    Route::view('/msoffice', 'courses.msoffice')->name('courses.msoffice');
    Route::view('/adit', 'courses.adit')->name('courses.adit');
    Route::view('/basic', 'courses.basic')->name('courses.basic');
    Route::view('/dtp', 'courses.dtp')->name('courses.dtp');
    Route::view('/pgdca', 'courses.pgdca')->name('courses.pgdca');
});



