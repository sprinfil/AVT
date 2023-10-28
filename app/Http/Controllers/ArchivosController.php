<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Persona;
use DragonCode\PrettyArray\Services\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivosController extends Controller
{

    public function index(Request $request){
        $persona_id = $request->persona_id;
        return view('vistas.personas.subir-archivos',compact('persona_id'));
    }

    public function store(Request $request){

        //guardar archivo y obtener ruta
        $archivo = $request->file('file')->store('public/personas/archivos/'.$request->persona_id);

        //convertir la ruta en vez de public a storage
        $url_archivo = Storage::url($archivo);

        //crear los archivos
        $archivo = new Archivo();
        $archivo->url =  $url_archivo;
        $archivo->persona = $request->persona_id;
        $archivo->save();

    }
}
