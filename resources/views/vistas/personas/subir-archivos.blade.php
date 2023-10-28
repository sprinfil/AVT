@extends('layouts.principal')

@section('css')
    @vite('resources/css/dropzone.css')
@endsection

@section('titulo')
    Personas
@endsection

@section('contenido')

<div class="mx-2 md:mx-[60px] mt-[20px]">

                <!--Cabecera-->
                <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden">
                    <div class="mx-[10px] md:mx-[50px] mt-[2px] text-fuente text-[20px]">
                        <a href="{{route('personas')}}" class="underline text-blue-500">Personas</a> 
                        / 
                        <a href="" class="underline text-blue-500">Nueva persona</a>
                      </div>
    
                    <div class="mx-[10px] md:mx-[50px]  justify-between">
                    <p class="text-fuente text-[40px] mb-[20px]">SUBIR DOCUMENTACIÓN</p>
                    <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
                    <a href="{{route('personas')}}"><button class="btn-primary" type="button">Aceptar</button></a>
                    </div>
                </div>

                
               <!--Formulario-->
               <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
                <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0">
                    <p class="text-fuente text-[20px]">DOCUMENTACIÓN</p>
                </div>
                <div class=" px-7 py-7 gap-x-20 ">
                <!--Primera Columna-->
                    <form action="{{route('personas_archivos_store',['persona_id'=>$persona_id])}}"
                        class="dropzone mx-[30px] rounded-md"
                        id="my-awesome-dropzone">
                    </form>
                </div>
            </div>
</div>

@endsection

@section('js')

<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    Dropzone.options.myAwesomeDropzone = { 
      headers:{
        'X-CSRF-TOKEN' : "{{csrf_token()}}"
      },
    }
</script>
@endsection