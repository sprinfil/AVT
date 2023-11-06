<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

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
        //estos caracteres: 2>&1 sirven para mostrar el resultado del comando 

        $actualizar_sistema = exec('git pull origin main --no-edit 2>&1');
        $npm_build = exec('npm run build');

        Artisan::call('migrate');

        $result = $actualizar_sistema ." ".$npm_build." " Artisan::output();
        echo $result . "Refresque la pagina para aplicar los cambios";

    }

    public function generar_copia_seguridad(){
        Artisan::call('backup:run');
        $output = Artisan::output();
        return $output;
    }
}
