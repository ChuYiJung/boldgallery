<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function boldgallery(){
    return view('boldgallery');
  }
 public function scan(){
    return view('scan');
  }
public function dashbord(){
    return view('dashbord');
  }
public function music(){
    return view('music');
  }

  public function dashborda(){
    return view('dashborda');
  }


  //public function cereate(){
    //return view('create');
  //}

}
