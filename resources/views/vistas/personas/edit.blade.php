@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('personas') }}" class="underline text-blue-500">PERSONAS</a>
        /
        <a href="">{{ App\Models\Persona::find($persona_id)->nombreCompleto() }}</a>
    </div>

    @livewire('personas.edit',['persona_id' => $persona_id])
    @livewire('personas.modal-eliminar')
    @livewire('personas.editar-archivo')
    @livewire('personas.baja-persona')
@endsection