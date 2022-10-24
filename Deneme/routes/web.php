<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
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


Route::get("/", [AnasayfaController::class, "index"])->name("MainPage");
Route::get("/second", [MainPageController::class, "index"])->name("secondPage");


Route::post("/login", [LoginController::class,"login"])->name("secondPage");
Route::post("/register", [RegisterController::class,"register"])->name("MainPage");


Route::middleware('auth')->group(function(){
    Route::get('secondPage', function(){
        return view('secondPage');
    })->name('secondPage');
});


