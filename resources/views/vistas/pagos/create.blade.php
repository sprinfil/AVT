@extends('layouts.principal')

@section('titulo')
    Nuevo Pago
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('pagos') }}" class="underline text-blue-500">PAGOS</a>
        <span> / </span>
        <a href="{{ route('nuevo_pago') }}" class="hover:underline hover:text-blue-500 transition-all">Nuevo Pago</a>
    </div>

    <!--Cabecera-->
    <div class=" w-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">Nuevo Pago</p>
        </div>
    </div>

    <!-- Nuevo Pago-->
    <div>
        @livewire('pagos.nuevo-pago-form')
    </div>

@endsection