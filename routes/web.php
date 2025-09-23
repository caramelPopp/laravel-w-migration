<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get(
    '/',
    [MainController::class, 'home']
)->name('home');

Route::get(
    '/courses',
    [MainController::class, 'courses']
)->name('courses');

Route::get(
    '/departments',
    [MainController::class, 'departments']
)->name('departments');

Route::get(
    '/vestibular',
    [MainController::class, 'vestibular']
)->name('vestibular');

Route::get(
    '/contact',
    [MainController::class, 'contact']
)->name('contact');

Route::get(
    '/contact/send', 
    [App\Http\Controllers\ContactController::class, 'send']
)->name('contact.send');


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
