@extends('layouts.principal')

@section('titulo')
    Crear nuevo Lote
@endsection

@section('contenido')
    @livewire('lotes.create', ['id' => $id])
@endsection