
<div>
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('pagos') }}" class="underline text-blue-500">PAGOS</a>
    </div>
    <div class="mx-2 md:mx-[60px] mt-[20px]">

        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">PAGO - {{ $pago->zona->nombre }}</p>
            </div>
        </div>

        <!--CONTACTO-->
        <div class="h-full bg-gray-100 shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
            <div
                class="w-full h-[50px] bg-gray-100 rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
                <p class="text-fuente-secundario text-[20px]" id="contacto">DETALLES</p>
            </div>
            <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                <!--Primera Columna-->
                <div>
                    <div class="flex gap-2">
                        <div class="w-full">
                            <p class="text-fuente-secundario">Fecha Incial:</p>
                            <input wire:model="fecha_inicial" type="date" class="input-pdv w-full mb-3 text-[15px]"
                                name="fecha_inicial" placeholder="fecha inicial" value="{{ old('fecha_inicial') }}" disabled>
                            @error('fecha_inicial')
                                <div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                    {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="w-full">
                            <p class="text-fuente-secundario">Fecha final</p>
                            <input wire:model="fecha_final" type="date" class="input-pdv w-full mb-3 text-[15px]"
                                name="fecha_final" placeholder="fecha final" value="{{ old('fecha_final') }}" disabled>
                            @error('fecha_final')
                                <div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                    {{ $message }} </div>
                            @enderror
                        </div>

                    </div>

                    <p class="text-fuente-secundario">Método de pago:</p>
                    <input wire:model="metodo_pago" type="text" class="input-pdv w-full mb-3 text-[15px]"
                        name="metodo_pago" placeholder="Metodo de pago" value="{{ old('metodo_pago') }}" disabled>
                    @error('metodo_pago')
                        <div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }}
                        </div>
                    @enderror

                </div>
                <!--Segunda Columna-->
                <div>
                    <p class="text-fuente-secundario">Monto total:</p>
                    <p class="text-fuente-secundario">$ {{ number_format($pago->monto, 2) }}</p>
                </div>

                <div class="flex flex-wrap gap-3 mt-[40px]">
                    <div wire:click = "regenerar_ingresos"
                        class="flex btn-primary-red gap-x-2 items-center justify-center  mb-[10px] cursor-pointer w-[200px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <p class=" text-[17px]">PDF INGRESOS </p>
                    </div>

                    <div wire:click = "regenerar_tickets"
                        class="flex btn-primary-red gap-x-2 items-center justify-center  mb-[10px] cursor-pointer w-[200px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <p class=" text-[17px]">PDF TICKETS </p>
                    </div>
                </div>
            </div>
        </div>

        <!--DOCUMENTACION-->
        <div class="h-full bg-gray-100 shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[120px] ">
            <div
                class="w-full h-[50px] bg-gray-100 rounded-md mt-0 flex justify-center items-center  border-b border-fuente">
                <p class="text-fuente-secundario text-[20px]" id="documentacion">Documentación</p>
            </div>
            <button
                class="btn-primary mt-[20px] cursor-pointer ml-[30px] mb-[30px] {{ $esconder_dropzone == '' ? 'bg-green-500 text-black' : 'bg-principal' }}"
                wire:click="toggleArchivos" id="btnDocumentacionAceptar">{{ $boton_documentacion }}</button>
            <div class="border-2 border-sky-500 border-dashed rounded-[30px] my-[20px] mx-[30px] overflow-hidden transition-transform"
                style="{{ $estilo_dropzone }} {{ $toggle_animacion_dropzone }}">
                <form action="{{ route('pagos_archivos_store', ['pago_id' => $pago->id]) }}" class="dropzone rounded-[30px]" id="my-awesome-dropzone">
                </form>
            </div>
            <div class=" mt-[1px] overflow-x-auto no-scrollbar mb-[50px]">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Nombre del archivo
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($archivos as $archivo)
                            <tr>
                                <td scope="row"
                                    class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-fuente-secundario hover:bg-gray-200 "
                                    wire:click="verArchivo({{ '"' . $archivo->url . '"' }})">
                                    {{ $archivo->nombre }}
                                </td>

                                <td
                                    class="py-4 px-6 dark:text-fuente-secundario  text-left grid grid-cols-1 md:grid-cols-2 text-[16px] hover:bg-white">
                                    <button class="font-medium dark:text-rojo hover:underline"
                                        wire:click="eliminar_alert({{ '"' . $archivo->url . '"' }},{{ $archivo->id }})">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script>
        const btnDocumentacionAceptar = $("#btnDocumentacionAceptar");
        let finalizar = false;
        Dropzone.autoDiscover = false;



        var miDropzone = new Dropzone("#my-awesome-dropzone", {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },

            success: function(file, response) {
                finalizar = true;
            }
        });



        btnDocumentacionAceptar.click(function() {
            console.log(finalizar);
            if (finalizar) {
                @this.dispatch('actualizarDocumentos')
            }
        })

        window.addEventListener('eliminar_alert', event => {
            Swal.fire({
                title: "¿Eliminar?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('eliminar_archivo')
                }
            });
        });
    </script>
@endsection
