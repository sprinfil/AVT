@section('css')
    @vite('resources/css/dropzone.css')
@endsection

<div>
    @if($persona_id != null)
     <div class="{{$esconder}}">
 
         <!--///////Div para agregar transparencia//////-->
             <div class="bg-black w-screen h-screen z-[10] absolute top-0 left-0 opacity-60"></div>
     
             <!--///////Div contenedor para centrar el modal//////-->
             <div class="w-screen h-screen z-[30] absolute top-0 left-0 items-center justify-center flex">
         
                    <!--///////Contenedor del modal//////-->
                 <div class="bg-negro-menu rounded-md overflow-auto md:w-[800px] w-full md:h-auto h-auto">
     
                       <!--///////Icono del modal (contenedor superior)//////-->
                       <form action="{{route('personas_archivos_store',['persona_id'=>$persona_id])}}"
                        class="dropzone mx-[30px] rounded-md mt-[30px]"
                        id="my-awesome-dropzone"
                        >
                    </form>
                         
                         <!--///////Botones (contenedor inferior)//////-->
                         <div class="bg-terciario w-full h-[100px] flex justify-end py-5">
                             <button class="btn-primary right-0 mr-5" wire:click="save"> Aceptar </button>
                         </div>
 
                 </div>
             </div>
         </div>
  @endif
 </div>

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