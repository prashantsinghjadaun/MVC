<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function() {
    return "Hello World";
    echo("hi ");
});

// direct method to fetch the view 
Route::view('/', 'welcome');

Route::view('/', 'table');