
@section('css')
    @vite('resources/css/dropzone.css')
@endsection

<div class="mx-2 md:mx-[60px] mt-[20px]">

    <!--Cabecera-->
    <div class=" w-full h-full bg-terciario shadow-lg rounded-md overflow-x-hidden ">
        <div class="mx-[10px] md:mx-[50px]  justify-between mt-[20px]">
        <p class="text-fuente text-[40px] mb-[20px]">SUBIR DOCUMENTACIÓN</p>

        <!--Opciones-->
        <div class="mb-[20px]">
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <button class="btn-primary" type="button" id="btnAceptar" wire:click="aceptar">Aceptar</button>
        </div>

        </div>
    </div>

    
   <!--Formulario-->
   <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px] ">
    <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0 border-b border-fuente">
        <p class="text-fuente text-[20px]">DOCUMENTACIÓN</p>
    </div>
    <div class=" px-7 py-7 md:gap-y-0 gap-y-10 md:gap-x-10 grid grid-cols-1 md:grid-cols-3">
            <!--FOTO-->
            <div>
                <p class="text-fuente text-[16px] ml-[12px] mb-[20px]">Agregar Fotografia:</p>
                <div class="border-2 border-sky-500 border-dashed rounded-[30px]">
                    <form action="{{route('personas_archivos_store_image',['persona_id'=>$persona_id])}}"
                        class="dropzone  rounded-[30px] "
                        id="my-awesome-dropzone-2"
                        >
                    </form>
                </div>
            </div>

        <!--ARCHIVOS-->
        <div class="col-span-2">
            <p class="text-fuente text-[16px] ml-[12px] mb-[20px]">Agregar Documentos:</p>
            <div class="border-2 border-sky-500 border-dashed rounded-[30px] w-full">
                <form action="{{route('personas_archivos_store',['persona_id'=>$persona_id])}}"
                    class="dropzone  rounded-[30px] "
                    id="my-awesome-dropzone"
                    >
                </form>
            </div>
        </div>
        
    </div>
</div>

@section('js')

<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    const btnAceptar = $("#btnAceptar");

    Dropzone.autoDiscover = false; // Para evitar que Dropzone busque automáticamente elementos con la clase "dropzone".

    var miDropzone = new Dropzone("#my-awesome-dropzone", {
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
    });

    var miDropzone2 = new Dropzone("#my-awesome-dropzone-2", {
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
    });

</script>

<script src="{{ asset('js/sweetalert.js') }}"></script>
<script>
    window.addEventListener('success', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Persona Guardada',
            showConfirmButton: false,
            text: 'La persona se ha registrado correctamente',
            timer: 1500,   
            }
        )
        regresar();
    });
    function regresar(){
        setTimeout(function() {
        @this.dispatch('salir')
        }, 1000);
    }

</script>

@endsection
