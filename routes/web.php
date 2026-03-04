<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/table', 'table');
Route::view('/about', 'about');