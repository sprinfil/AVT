@extends('layouts.principal')

@section('titulo')
    Ventas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('ventas') }}" class="underline text-blue-500">VENTAS</a>
        /
        <a href="{{ route('nueva_venta') }}" class="underline text-blue-500">NUEVA VENTA</a>
        /
        <a href="">RESUMEN VENTA</a>
    </div>

    @livewire('ventas.resumen-venta',['venta_id'=>$venta_id])
@endsection