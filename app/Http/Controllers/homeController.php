<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\user;

class homeController extends Controller
{
    public function index()
    {

     $role = user::find(1)->roles;
          return $role;
      //return view('welcome',compact('role'));
    }
}
