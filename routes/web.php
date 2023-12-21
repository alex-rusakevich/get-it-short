<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [LinksController::class, 'index']);
Route::get("/show/{id}", [LinksController::class, 'show_link']);
Route::post("/create", [LinksController::class, 'create_link']);

Route::get("/{id}", [LinksController::class, 'link_redirect']);
