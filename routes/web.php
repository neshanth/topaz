<?php

use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Controllers\Home\Homepage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [Homepage::class, 'index']);
Route::get("/about", [Homepage::class, 'about']);

// Admin
Route::get("/admin", [Dashboard::class, 'index'])->name("dashboard");
