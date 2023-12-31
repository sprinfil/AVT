<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('vistas.personas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vistas.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonaRequest $request)
    {
        /// 
        /*
        Persona::create($request->all());
        $persona = Persona::orderBy('id', 'desc')->first();
        return redirect(route('personas_archivos',['persona_id'=>$persona->id]));
        */

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        return view('vistas.personas.edit',['persona_id'=>$request->persona_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
