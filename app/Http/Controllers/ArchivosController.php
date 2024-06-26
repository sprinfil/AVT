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

         // Obtener el nombre original del archivo
        $nombreOriginal = $request->file('file')->getClientOriginalName();

         // Guardar el archivo con el nombre específico y obtener la ruta
        $archivo = $request->file('file')->storeAs('public/personas/archivos/'.$request->persona_id, $nombreOriginal);

        //convertir la ruta en vez de public a storage
        $url_archivo = Storage::url($archivo);


        //crear los archivos
        $archivo = new Archivo();
        $archivo->url =  $url_archivo;
        $archivo->nombre = $nombreOriginal;
        $archivo->persona = $request->persona_id;
        $archivo->save();

    }

    public function store_image(Request $request){

        $nombre = 'foto.'.'jpg';
        //guardar archivo y obtener ruta
        $archivo = $request->file('file')->storeAs('public/personas/imagenes/'.$request->persona_id, $nombre);

        //convertir la ruta en vez de public a storage
        $url_archivo = Storage::url($archivo);

        $persona = Persona::find($request->persona_id);
        $persona->foto = $url_archivo;
        $persona->save();
    }

    public function store_archivo_pago(Request $request){
        // Obtener el nombre original del archivo
        $nombreOriginal = $request->file('file')->getClientOriginalName();

        // Guardar el archivo con el nombre específico y obtener la ruta
        $archivo = $request->file('file')->storeAs('public/pagos/archivos/'.$request->pago_id, $nombreOriginal);

        //convertir la ruta en vez de public a storage
        $url_archivo = Storage::url($archivo);


        //crear los archivos
        $archivo = new Archivo();
        $archivo->url =  $url_archivo;
        $archivo->nombre = $nombreOriginal;
        $archivo->pago_id = $request->pago_id;
        $archivo->save();
    }
}
