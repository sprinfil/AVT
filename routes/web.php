<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
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

//HOME
Route::controller(HomeController::class)->group(function () {
    Route::get('/','index')->name('home');
});

//PERSONAS
Route::controller(PersonaController::class)->group(function () {
    Route::get('/personas','index')->name('personas');
    Route::get('/personas/create','create')->name('personas_create');
});