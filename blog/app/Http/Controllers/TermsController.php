<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    function TermsPage()
    {
        return view('Terms');
    }
}
