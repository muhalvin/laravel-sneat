<?php

namespace App\Http\Controllers\Member\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home.main');
    }
}
