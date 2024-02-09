@extends('layouts.principal')

@section('titulo')
    Ventas
@endsection

@section('contenido')
    @livewire('ventas.resumen-venta',['venta_id'=>$venta_id])
@endsection