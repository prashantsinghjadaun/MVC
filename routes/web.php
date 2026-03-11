<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/greet', function () {
    return view('welcome');
});

Route::get("/",function(){
    return view('student');
});

Route::get("/student",function(){
    return view('student');
});

Route::view('/about',"about");

// Route parameters
Route::get("/params/{id}",function($id){
    return "<h1>Id passed is $id</h1>";
});

// optional parameter
Route::get("/params/{id?}",function($id=null){
    return "<h1>Id passed is $id</h1>";
});

// multiplication table
Route::get("/multiply/{id}",function($id){
    for($i=1;$i<=10;$i++){
        echo "$id X $i = ".$id*$i."<br>";
    }
})->whereNumber('id');

// Controller route
Route::get('/table', [PageController::class, 'table']);