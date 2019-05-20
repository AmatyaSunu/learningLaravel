<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function welcome()
    {

      return view('welcome');
    }
    public function about()
    {

      return view('about');
    }
}
