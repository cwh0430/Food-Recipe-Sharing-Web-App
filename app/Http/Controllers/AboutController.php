<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function team()
    {
        return view('about.team');
    }
    public function company()
    {
        return view('about.company');
    }
    public function feedback()
    {
        return view('about.feedback');
    }
}
