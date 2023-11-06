<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
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
        /*
                $actualizar_sistema = exec('git pull origin main 2>&1');

        Artisan::call('migrate');

        $result = $actualizar_sistema ." ". Artisan::output();
        echo $result . "Refresque la pagina para aplicar los cambios";
        */
            // Define el comando Git que deseas ejecutar
            $gitCommand = 'git pull origin main';

            // Crea una nueva instancia de Symfony Process
            $process = new Process(explode(' ', $gitCommand));

            // Establece la ruta de trabajo (directorio) donde se ejecutará el comando Git
            $process->setWorkingDirectory('/var/www/AVT');

            // Ejecuta el comando Git
            $process->run();

            // Obtiene la salida del comando Git
            $output = $process->getOutput();

            // Comprueba si la ejecución del comando fue exitosa
            if ($process->isSuccessful()) {
                // El comando Git se ejecutó con éxito
                echo "Comando Git ejecutado con éxito. Salida: $output";
            } else {
                // Hubo un error al ejecutar el comando Git
                echo "Error al ejecutar el comando Git. Salida: $output";
            }
    }

    public function generar_copia_seguridad(){
        Artisan::call('backup:run');
        $output = Artisan::output();
        return $output;
    }
}
