
@section('css')
    @vite('resources/css/dropzone.css')
@endsection

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
        <a href="{{route('personas')}}" ><button class="btn-primary" type="button" id="btnAceptar">Aceptar</button></a>
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
            id="my-awesome-dropzone"
            >
        </form>

    </div>

</div>

@section('js')

<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    let nombres = [];
    const btnAceptar = $("#btnAceptar");

    Dropzone.options.myAwesomeDropzone = { 
      headers:{
        'X-CSRF-TOKEN' : "{{csrf_token()}}"
      },
    }
    

    Dropzone.autoDiscover = false; // Para evitar que Dropzone busque automáticamente elementos con la clase "dropzone".
        var miDropzone = new Dropzone("#my-awesome-dropzone", {
        // Configuración de Dropzone
        // ...
        success: function(file, response) {
        // Este es el evento success que se dispara cuando un archivo se sube con éxito.
        // file es el objeto del archivo subido, y response contiene la respuesta del servidor.

        // Aquí puedes realizar acciones adicionales, por ejemplo, mostrar un mensaje de confirmación.


        console.log("Archivo subido con éxito:", file);
        console.log("Respuesta del servidor:", response);
        nombres.push(file.name);
        console.log(nombres);
      
        }
  });

  btnAceptar.click(function(){
          @this.dispatch('actualizarDocumentos', [nombres] )
    })
</script>

@endsection
