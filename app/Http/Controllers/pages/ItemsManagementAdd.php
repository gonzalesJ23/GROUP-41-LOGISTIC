<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsManagementAdd extends Controller
{
  public function index()
  {
    return view('content.pages.pages-items-management-add');
  }
}
