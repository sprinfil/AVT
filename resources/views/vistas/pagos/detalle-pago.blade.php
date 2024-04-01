@extends('layouts.principal')

@section('titulo')
    Pagos
@endsection

@section('contenido')
    @livewire('pagos.detalle-pago',['pago_id' => $pago_id])
@endsection

