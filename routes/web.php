<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [PagesController::class, 'myProfile'])->name('profile');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/list', [PagesController::class, 'list'])->name('list');
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::post('/registration', [PagesController::class, 'registration_submit'])->name('registration.submit');
