@extends('layouts.principal')

@section('titulo')
    {{ $zona->nombre }}
@endsection

@section('contenido')
    @livewire('zonas.show', ['zona' => $zona])
@endsection