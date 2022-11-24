<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(){

      return view('contact');
    }

    public function about(){

      return view('about');
    }

    public function welcome(){

      return view('welcome');
    }




  }