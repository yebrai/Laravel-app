<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "welcome al index";
    }

    public function create()
    {
        return "En esta pagina podras crear un curso";

    }

    public function show($curso)
    {
        return "Bienvenido al curso: $curso";
    }
}