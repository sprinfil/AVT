@extends('layouts.principal')

@section('titulo')
    Usuarios
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="" class="underline text-blue-500">USUARIOS</a>
    </div> 

    @livewire('usuarios.usuarios')
@endsection