@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')
    @livewire('personas.edit',['persona_id' => $persona_id])
    @livewire('personas.modal-eliminar')
    @livewire('personas.editar-archivo')
    @livewire('personas.baja-persona')
@endsection