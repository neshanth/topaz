<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index()
    {
        return view("Homepage/index");
    }
    public function about()
    {
        return view("About.about");
    }
}
