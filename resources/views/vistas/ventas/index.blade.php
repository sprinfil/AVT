@extends('layouts.principal')

@section('titulo')
    Ventas
@endsection

@section('contenido')
    @livewire('ventas.index')
@endsection