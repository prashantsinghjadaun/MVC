<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/student', [PageController::class, 'student']);

Route::view('/about', 'about');
Route::view('/contact', 'contact');