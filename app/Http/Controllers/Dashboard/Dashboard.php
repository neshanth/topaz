<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;


class Dashboard extends Controller
{
    public function index()
    {
        return view("Dashboard.dashboard");
    }
}
