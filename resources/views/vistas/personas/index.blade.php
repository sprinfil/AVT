@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    @livewire('personas.index')
@endsection