<?php

use App\Http\Controllers\VentaController;
use App\Models\Zona;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\PagosController;

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
    
    //USUARIOS
    Route::controller(UserController::class)->group(function () {
        Route::get('/usuarios','index')->name('usuarios');
        // Route::get('/usuarios/create','create')->name('usuarios_create');
        Route::post('/usuarios/store','store');
        // Route::get('/usuarios/edit/{persona_id}','show')->name('usuarios_edit');
    });

    //PERSONAS
    Route::controller(PersonaController::class)->group(function () {
        Route::get('/personas','index')->name('personas');
        Route::get('/personas/create','create')->name('personas_create');
        Route::post('/personas/store','store')->name('personas_store');
        Route::get('/personas/edit/{persona_id}','show')->name('personas_edit');
    });

    //ZONAS
    Route::prefix('zonas')->group(function () {
        Route::controller(ZonaController::class)->group(function () {
            Route::get('', 'index')->name('zonas.index');
            Route::get('/zona/{id}', 'show')->name('zonas.show');
        });
    });

    //LOTES
    Route::prefix('lotes')->group(function () {
        Route::controller(LoteController::class)->group(function () {
            Route::get('/lote/create/zona/{id}', 'create')->name('lotes.create');
            Route::get('/lote/{id}', 'show')->name('lotes.show');
        });
    });
    
    //ARCHIVOS
    Route::controller(ArchivosController::class)->group(function () {
        Route::get('/personas/subir-archivos/{persona_id}','index')->name('personas_archivos');
        Route::post('/personas/subir-archivos/store/{persona_id}','store')->name('personas_archivos_store');
        Route::post('/personas/subir-archivos/store_image/{persona_id}','store_image')->name('personas_archivos_store_image');
    });

    //CONFIGURACION
    Route::middleware(['admin'])->group(function (){
        Route::controller(ConfiguracionController::class)->group(function () {
            Route::get('/configuracion','index')->name('configuracion');
            Route::get('/configuracion/actualizar','actualizar_sistema')->name('actualizar_sistema');
            Route::get('/configuracion/copia-seguridad','generar_copia_seguridad')->name('generar_copia_seguridad');
        });
    });

    //LOGOUT
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

    //REPORTES
    Route::controller(ReportesController::class)->group(function () {
        Route::get('/personas/pdf/{persona_id}','informacion_persona_pdf')->name('persona_pdf');
        Route::get('/ventas/nueva/generar_contrato/{venta_id}','generar_contrato')->name('generar_contrato');
        Route::get('/ventas/nueva/generar_pagares/{venta_id}','generar_pagares')->name('generar_pagares');
        Route::get('/ventas/nueva/generar_anticipo/{venta_id}','generar_anticipo')->name('generar_anticipo');
        Route::get('/ver_contrato/{venta_id}','ver_contrato')->name('ver_contrato');
        Route::get('/ver_escritura/{venta_id}','ver_escritura')->name('ver_escritura');
        Route::post('/guardar_contrato/{venta_id}','guardar_contrato')->name('guardar_contrato');
        Route::get('/generar_ticket/{ticket_id}','generar_ticket')->name('generar_ticket');
        Route::get('/generar_recibo_pago/{pago_id}','generar_recibo_pago')->name('generar_recibo_pago');
        Route::get('/generar_pago_dueno/{pago_id}','generar_pago_dueno')->name('generar_pago_dueno');
        Route::get('/generar_tickets_pagos_duenos/{pago_id}','generar_tickets_pagos_duenos')->name('generar_tickets_pagos_duenos');
    });

      //VENTAS
    Route::controller(VentaController::class)->group(function () {
        Route::get('/ventas','index')->name('ventas'); 
        Route::get('/ventas/nueva','index_nueva_venta')->name('nueva_venta'); 
        Route::get('/ventas/nueva/resumen-venta/{venta_id}','index_resumen_venta')->name('index_resumen_venta'); 
        Route::get('/ventas/detalle/{venta_id}','index_detalle_venta')->name('index_detalle_venta'); 
    });

    //PAGOS A DUEÑOS
    Route::controller(PagosController::class)->group(function () {
        Route::get('/pagos', 'index')->name('pagos');
        Route::get('/pagos/nuevo','create')->name('nuevo_pago'); 
    });
});
