<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Artisan;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('vistas.configuracion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function actualizar_sistema(){
        $hola = Process::run('sudo chown -R sprinfil.sprinfil /var/www/AVT');
        $actualizar_sistema = Process::run('sudo git pull --rebase origin main');
        Process::run('sudo chown -R www-data.www-data /var/www/AVT');
        Artisan::call('migrate');

        $result = $actualizar_sistema->output() ." ". Artisan::output();
        echo $result;
    }

    public function generar_copia_seguridad(){
        Artisan::call('backup:run');
        $output = Artisan::output();

        return $output;
    }
}
