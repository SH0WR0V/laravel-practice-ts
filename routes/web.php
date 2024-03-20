<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [PagesController::class, 'myProfile'])->name('profile');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
