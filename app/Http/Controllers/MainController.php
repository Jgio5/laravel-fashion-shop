<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function dresses()
    {

        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];
        
        return view('dresses', $data);
    }

    public function info()
    {
        return view('info');
    }
}
