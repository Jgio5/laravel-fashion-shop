<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function vestiti()
    {
        return view('vestiti');
    }

    public function info()
    {
        return view('info');
    }
}