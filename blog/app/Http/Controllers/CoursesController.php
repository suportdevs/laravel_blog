<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function CoursesPage()
    {
        return view('Courses');
    }
}
