<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{
  public function index()
  {
        return view('tables');
  }
}
