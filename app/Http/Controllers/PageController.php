<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function student()
    {
        $students = [ ];

        return view('student', compact('students'));
    }
}