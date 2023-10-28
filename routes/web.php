<?php

use App\Http\Controllers\ArchivosController;
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
    Route::post('/personas/store','store')->name('personas_store');
});

//ARCHIVOS
Route::controller(ArchivosController::class)->group(function () {
    Route::get('/personas/subir-archivos/{persona_id}','index')->name('personas_archivos');
    Route::post('/personas/subir-archivos/store/{persona_id}','store')->name('personas_archivos_store');
});