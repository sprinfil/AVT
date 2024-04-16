<div>
    <div class="p-5 mx-[10px] md:mx-[40px] m-auto mt-5 bg-gray-100  shadow-lg rounded-md overflow-x-hidden border-2  mb-12">
        <p class="text-fuente-secundario text-xl">Buscar Zona</p>
        <form wire:submit.prevent="submit" class="mt-5">

            <div class="">
                <input type="text" wire:model='nombre_zona' wire:input='actualizar_filtro' placeholder="Nombre de Zona" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="">
                <select name="zona" id="zona" wire:model='zona' wire:change='actualizar_zona' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="selecciona" disabled>--Selecciona una Zona--</option>
                    <option value="GENERAL">Todas las Zonas</option>
                    @foreach ($zonas as $zona)
                        <option value="{{ $zona->id }}"> ID: {{ $zona->id }} - Zona: {{ $zona->nombre }}</option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="fecha">Fecha:</label><input type="date" id="fecha" wire:model='fecha' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="block py-5">
                <div class="mb-4 text-fuente-secundario">
                    @if($zona_seleccionada == 'GENERAL')
                        <p class="text-xl">La selección aplica a todas las zonas.</p>
                    @elseif(!empty($zona_seleccionada) && $zona != 'selecciona')
                        <p class="text-xl">Información de la Zona</p>
                        <div class="p-2">
                            <p class="font-bold">ID: <span class="font-normal">{{ $zona_seleccionada->id ?? 'Sin Seleccionar' }}</span></p>
                            <p class="font-bold">Zona: <span class="font-normal" id="nombre_de_la_zona">{{ $zona_seleccionada->nombre ?? 'Sin Seleccionar' }}</span></p>
                            <p class="font-bold">Dueño: <span class="font-normal">{{ $zona_seleccionada ? $zona_seleccionada->dueno->nombreCompleto() : 'Sin Seleccionar' }}</span></p>
                            <p class="font-bold">Contratos: <span class="font-normal">{{ $zona_seleccionada ? count($zona_seleccionada->contratos) : 'Sin Seleccionar' }}</span></p>
                        </div>
                    @else
                        <p class="text-xl">Por favor, selecciona una Zona.</p>
                    @endif
                </div>
            </div>
            
            <div class="flex items-center justify-end">
                @if(!empty($zona_seleccionada))                    
                    <button wire:click='cancelar' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-1" type="button">
                        Cancelar
                    </button>
                    <button type="submit" wire:click='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline  mx-1" type="button">
                        Generar Reporte
                    </button>
                @endif
            </div>
        </form>
    </div>

</div>

@section('js')
    <script>
        window.addEventListener('advertencia_reporte', event => {
            Swal.fire({
                title: "¿Deseas Continuar con el Reporte?",
                text: 'Asegurate de que la información sea correcta',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {
                    var selectZona = document.getElementById('zona');
                    var zonaSeleccionada = selectZona ? selectZona.value : null;     
                    
                    var inputFecha = document.getElementById('fecha');
                    var fecha = inputFecha.value;
                    
                    if (zonaSeleccionada == 'GENERAL'){
                        var nombreArchivo = "reporte_pagos_" + zonaSeleccionada + '_' + fecha + ".pdf"; // Genera o establece el nombre del archivo
                    } else {
                        var nombreArchivo = "reporte_pagos_Zona_" + zonaSeleccionada + '_' + fecha + ".pdf"; // Genera o establece el nombre del archivo
                    }
                    

                    $.ajax({
                        url: `/reportes/generar_reporte_pagos?zona=${zonaSeleccionada}&fecha=${fecha}`, // Añade el parámetro de zona a la URL
                        method: 'GET',  
                        xhrFields: {
                            responseType: 'blob' // Especifica que la respuesta es un blob (archivo binario)
                        },
                        success: function(response) {
                            var blob = new Blob([response], { type: 'application/pdf' });
                            saveAs(blob, nombreArchivo);
                        },
                        error: function(xhr, status, error) {
                            // Esta función se ejecutará si la petición falla
                            console.error(xhr, status, error);
                        }
                    });
                }
            });
        });
    </script>
@endsection