@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    @livewire('personas.edit',['persona_id' => $persona_id])
@endsection