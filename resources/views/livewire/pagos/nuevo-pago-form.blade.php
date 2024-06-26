<div>
    <div class="p-5 mx-[10px] md:mx-[40px] m-auto mt-5 bg-gray-100  shadow-lg rounded-md overflow-x-hidden border-2  mb-12">
        <p class="text-fuente-secundario text-xl">Buscar Zona</p>
        <form wire:submit.prevent="submit" class="mt-5">

            <div class="">
                <input type="text" wire:model='nombre_zona' wire:input='actualizar_filtro' placeholder="Nombre de Zona" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="">
                <select name="zona" id="zona" wire:model='zona' wire:change='actualizar_zona' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="selecciona" disabled selected>--Selecciona una Zona--</option>
                    @foreach ($zonas as $zona)
                        <option value="{{ $zona->id }}"> ID: {{ $zona->id }} - Zona: {{ $zona->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="block   py-5  ">
                <div class="mb-4 text-fuente-secundario hidden">
                    <p class="text-xl">Información de la Zona</p>
                    <div class="p-2">
                        <p class="font-bold">ID: <span class=" font-normal">{{ $zona_seleccionada->id ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Zona: <span class=" font-normal">{{ $zona_seleccionada->nombre ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Dueño: <span class=" font-normal">{{ $zona_seleccionada ? $zona_seleccionada->dueno->nombreCompleto() : 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Contratos: <span class=" font-normal">{{ $zona_seleccionada ? count($zona_seleccionada->contratos) : 'Sin Seleccionar' }}</span></p>
                    </div>
                </div>
                @if($zona_seleccionada)
                    <div class="mb-4 text-fuente-secundario">
                        <p class="text-xl">Información del Pago</p>

                        <div class="p-2 w-full">                    
                            <label for="zona_seleccionado" class="text-fuente-secundario">Metodo de Pago:</label>
                            <br>
                            <select name="metodo" id="metodo" wire:model='metodo' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value='selecciona' disabled selected>--Selecciona un Metodo de Pago--</option>
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                                <option value="CHEQUE">CHEQUE</option>
                                <option value="DEPOSITO">DEPOSITO</option>
                            </select>
                        </div>
                    </div>                
                    <div class="mb-4 text-fuente-secundario">
                        <p class="text-xl">Periodo</p>

                        <div class="p-2">                    
                            <label for="zona_seleccionado" class="text-fuente-secundario">Desde:</label>
                            <br>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="desde" id="desde" wire:model='desde'>
                            <br>
                            <label for="zona_seleccionado" class="text-fuente-secundario">Hasta:</label>
                            <br>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="hasta" id="hasta" wire:model='hasta'>
                        </div>
                    </div>     
                @else
                    
                @endif                           
            </div>
            
            <div class="flex items-center justify-end">
                <button wire:click='cancelar' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-1" type="button">
                    Cancelar
                </button>
                <button type="submit" wire:click='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline  mx-1" type="button">
                    Aplicar Pago
                </button>
            </div>
        </form>
    </div>

</div>

@section('js')
    <script>
        window.addEventListener('advertencia_pago', event => {
            Swal.fire({
                title: "¿Deseas Continuar con el Pago?",
                text: 'Asegurate de que los campos esten correctos',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('aceptar_pago')
                }
            });
        });

        window.addEventListener('error_metodo', event => {
            Swal.fire({
                icon: "error",
                title: "Error en Metodo de Pago",
                text: "Selecciona un Metodo de Pago",
            });
        });
        window.addEventListener('error_periodo', event => {
            Swal.fire({
                icon: "error",
                title: "Error en el Periodo de Pago",
                text: "Selecciona un Periodo correcto de Pago",
            });
        });
        window.addEventListener('no_tickets', event => {
            Swal.fire({
                icon: "error",
                title: "No hay Pagos por realizar",
                text: "No hay abonos para realizar pagos",
            });
        });

        window.addEventListener('pago_realizado', event => {
            Swal.fire({
                icon: "success",
                title: "Pago Realizado Con Exito",
                text: 'El pago ha sido guardado exitosamente',
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('realizado')
                }
            });
        });


                window.addEventListener('pago_realizado', event => {
                const pago_id = event.detail['data']['pago_id'];
                const nombre_archivo = event.detail['data']['nombre_archivo'];
                const nombre_archivo_2 = event.detail['data']['nombre_archivo_2'];
                
                console.log(event.detail);

                $.ajax({
                url: `/generar_pago_dueno/${pago_id}`,
                method: 'GET',
                xhrFields: {
                    responseType: 'blob' // Especifica que la respuesta es un blob (archivo binario)
                },
                success: function(response) {
                    var blob = new Blob([response], { type: 'application/pdf' });
                    saveAs(blob, nombre_archivo);
                },
                error: function(xhr, status, error) {
                    // Esta función se ejecutará si la petición falla
                    console.error(xhr, status, error);
                }
            })

            $.ajax({
                url: `/generar_tickets_pagos_duenos/${pago_id}`,
                method: 'GET',
                xhrFields: {
                    responseType: 'blob' // Especifica que la respuesta es un blob (archivo binario)
                },
                success: function(response) {
                    var blob = new Blob([response], { type: 'application/pdf' });
                    saveAs(blob, nombre_archivo_2);
                },
                error: function(xhr, status, error) {
                    // Esta función se ejecutará si la petición falla
                    console.error(xhr, status, error);
                }
            })

        });
    

    </script>
@endsection
