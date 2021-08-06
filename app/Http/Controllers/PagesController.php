<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function conocenos()
    {
    	return view('conocenos');
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function ayuda()
    {
    	return view('ayuda');
    }

    public function login()
    {
    	return view('login');
    }

      public function registro()
    {
    	return view('registro');
    }
}
