@extends('layouts.principal')

@section('titulo')
    Crear nuevo Lote
@endsection

@section('contenido')
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('zonas.index') }}" class="underline text-blue-500">ZONAS</a>
        /
        <a href="{{ route('zonas.show',['id'=>App\Models\Zona::find($id)->id]) }}" class="underline text-blue-500">{{ App\Models\Zona::find($id)->nombre  }} </a>
        /
        <a href="" class="">NUEVO LOTE</a>

    </div> 


    @livewire('lotes.create', ['id' => $id])
@endsection