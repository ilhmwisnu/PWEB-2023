<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, "index"]);
Route::get("/todo/{id}/{title}", [TodoController::class, "show"]);
Route::get('/about', [TodoController::class, "about"]);

Route::get('/todo/tambah', [TodoController::class,'create']);
Route::post("/",[TodoController::class,"store"]);
Route::delete("/todo/{id}",[TodoController::class, "destroy"]);



