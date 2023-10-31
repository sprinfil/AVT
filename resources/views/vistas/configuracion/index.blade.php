@extends('layouts.principal')

@section('titulo')
    Configruacion
@endsection

@section('contenido')
<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">CONFIGURACIONES</p>
        </div>
    </div>

        <!--CONTENEDOR PRINCIPAL-->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">


        <!--COPIA DE SEGURIDAD-->
        <div class="h-full bg-terciario shadow-lg  mt-[20px] rounded-lg  w-full">

            <div class="w-full h-[50px] bg-principal rounded-md  py-8 px-7 flex justify-center items-center mt-0  border-b border-fuente">
                <p class="text-fuente text-[12px] md:text-[15px]">COPIA DE SEGURIDAD</p>
            </div>
            <div class=" px-7 py-7 gap-x-20 grid grid-rows-2">
            <!--Primera fila-->
                <div>
                    <p class="text-fuente text-[15px] ">Genera una copia de seguridad que se almacena localmente.</p>
                </div>
                <!--segunda fila-->
                <div>
                    <button class="btn-primary w-full mt-[30px]">GENERAR</button>
                </div>
            </div>

        </div>

        <!--COPIA DE SEGURIDAD-->
        <div class="h-full bg-terciario shadow-lg  mt-[20px] rounded-lg  w-full">

            <div class="w-full h-[50px] bg-principal rounded-md  py-8 px-7 flex justify-center items-center mt-0  border-b border-fuente">
                <p class="text-fuente text-[12px] md:text-[15px]">ACTUALIZAR</p>
            </div>
            <div class=" px-7 py-7 gap-x-20 grid grid-rows-2">
            <!--Primera fila-->
                <div>
                    <p class="text-fuente text-[15px] ">Buscar nuevas actualizaciones.</p>
                </div>
                <!--segunda fila-->
                <div>
                    <a href="{{route('actualizar_sistema')}}"><button class="btn-primary w-full mt-[30px]">ACTUALIZAR</button></a>
                </div>
            </div>
        </div>

</div>
@endsection