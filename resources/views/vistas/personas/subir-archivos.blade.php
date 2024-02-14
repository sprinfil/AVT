@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('personas') }}" class="underline text-blue-500">PERSONAS</a>
        /
        <a href="{{ route('personas_create') }}">NUEVA</a>
    </div>

    @livewire('personas.subir-archivos',['persona_id'=>$persona_id])
@endsection

