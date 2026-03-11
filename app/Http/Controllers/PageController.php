<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function table()
    {
        $students = [
            ["id"=>1,"name"=>"Rahul","course"=>"B.Tech"],
            ["id"=>2,"name"=>"Prashant","course"=>"MVC"],
            ["id"=>3,"name"=>"Aman","course"=>"BCA"]
        ];

        return view('table', compact('students'));
    }
}