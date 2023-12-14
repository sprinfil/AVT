@extends('layouts.principal')

@section('titulo')
    Editar Lote
@endsection

@section('contenido')
    @livewire('lotes.show', ['id' => $id])
@endsection