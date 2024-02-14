@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('personas') }}" class="underline text-blue-500">PERSONAS</a>
        /
        <a  >NUEVA</a>
    </div>
    
    @livewire('personas.create')
@endsection



