<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //Solo administra una unica ruta
    {
        return view('home');
    }
}
