@extends('layouts.principal')

@section('titulo')
    Ventas
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('ventas') }}" class="underline text-blue-500">VENTAS</a>
        /
        <a href="" class="">Contrato No. {{ App\Models\Venta::find($venta_id)->no_contrato }}</a>
    </div>

    @livewire('ventas.detalle-venta',['venta_id'=>$venta_id])
@endsection