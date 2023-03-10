<?php

use App\Http\Controllers\StudentController;
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

Route::get("/", function () {
  return view("pages.Home.index");
});

Route::get("/student", [StudentController::class, "index"])->name("student");
Route::get("/student/create", [StudentController::class, "create"])->name(
  "student-create"
);
Route::post("/student/store", [StudentController::class, "store"]);
