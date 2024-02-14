@extends('layouts.principal')

@section('titulo')
    Editar Lote
@endsection

@section('contenido')

    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('zonas.index') }}" class="underline text-blue-500">ZONAS</a>
        /
        <a href="{{ route('zonas.show',['id'=>App\Models\Lote::find($id)->Zona->id]) }}" class="underline text-blue-500">{{App\Models\Lote::find($id)->Zona->nombre }}</a>
        /
        <a href="" class="">LOTE {{App\Models\Lote::find($id)->lote }}</a>
    </div> 


    @livewire('lotes.show', ['id' => $id])
@endsection