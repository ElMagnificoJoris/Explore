<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function about()
  {
      return view('about');
  }

  public function presta()
  {
      return view('prestations');
  }
}
