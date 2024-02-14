@extends('layouts.principal')

@section('titulo')
    {{ $zona->nombre }}
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="" class="underline text-blue-500">ZONAS</a>
        /
        <a href="" class=" text-fuente">{{ $zona->nombre }}</a>
    </div> 
    
    @livewire('zonas.show', ['zona' => $zona])
@endsection