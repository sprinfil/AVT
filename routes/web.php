<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ArchivosController;

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

//LOGIN
Route::middleware(['guest'])->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});


//AUTH
Route::middleware(['auth'])->group(function (){
    //HOME
    Route::controller(HomeController::class)->group(function () {
        Route::get('/','index')->name('home');
    });
    
    //PERSONAS
    Route::controller(PersonaController::class)->group(function () {
        Route::get('/personas','index')->name('personas');
        Route::get('/personas/create','create')->name('personas_create');
        Route::post('/personas/store','store')->name('personas_store');
        Route::get('/personas/edit/{persona_id}','show')->name('personas_edit');
    });
    
    //ARCHIVOS
    Route::controller(ArchivosController::class)->group(function () {
        Route::get('/personas/subir-archivos/{persona_id}','index')->name('personas_archivos');
        Route::post('/personas/subir-archivos/store/{persona_id}','store')->name('personas_archivos_store');
    });


    //LOGOUT
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});
