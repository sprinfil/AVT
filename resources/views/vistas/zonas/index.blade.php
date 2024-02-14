@extends('layouts.principal')

@section('titulo')
    Zonas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="" class="underline text-blue-500">ZONAS</a>
    </div>
    @livewire('zonas.index')
@endsection