<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reorder extends Controller
{
  public function index()
  {
    return view('content.pages.pages-reorder');
  }
}
