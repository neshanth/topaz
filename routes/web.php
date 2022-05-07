<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Controllers\Events\EventsController;
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

// Login
Route::get("/login", [LoginController::class, 'index'])->name("login");
Route::post("/login", [LoginController::class, 'login']);
Route::post("/logout", [LoginController::class, 'logout']);

// Admin
Route::get("/topaz/admin", [Dashboard::class, 'index'])->name("dashboard");

//Events
Route::resource("events", EventsController::class);
Route::get("/topaz/events", [EventsController::class, 'home']);

//Blogs
Route::resource("blogs", BlogController::class);
Route::get("/topaz/blogs", [BlogController::class, 'home']);
