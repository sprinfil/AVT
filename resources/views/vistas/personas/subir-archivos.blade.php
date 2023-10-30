@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    @livewire('personas.subir-archivos',['persona_id'=>$persona_id])
@endsection

