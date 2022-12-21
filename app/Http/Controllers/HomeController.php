<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function post()
    {
        return view('home.post');
    }

    public function about()
    {
        return view('home.about');
    }
    
}
