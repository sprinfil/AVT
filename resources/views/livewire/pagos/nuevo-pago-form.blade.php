<div>
    <div class="p-5 w-[90%] m-auto mt-5 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde mb-12">
        <p class="text-white text-xl">Buscar Zona</p>
        <form wire:submit.prevent="submit" class="mt-5">

            <div class="my-5">
                <label for="nombre_zona" class="text-white">Nombre de Zona:</label>
                <br>
                <input type="text" wire:model='nombre_zona' wire:input='actualizar_filtro' placeholder="Nombre de Zona" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-5">
                <label for="zona_seleccionado" class="text-white">Zona:</label>
                <br>
                <select name="zona" id="zona" wire:model='zona' wire:change='actualizar_zona' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="selecciona" disabled selected>--Selecciona una Zona--</option>
                    @foreach ($zonas as $zona)
                        <option value="{{ $zona->id }}"> ID: {{ $zona->id }} - Zona: {{ $zona->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="sm:block md:flex md:justify-between py-5 px-10">
                <div class="mb-4 text-white">
                    <p class="text-xl">Información de la Zona</p>
                    <div class="p-2">
                        <p class="font-bold">ID: <span class=" font-normal">{{ $zona_seleccionada->id ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Zona: <span class=" font-normal">{{ $zona_seleccionada->nombre ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Dueño: <span class=" font-normal">{{ $zona_seleccionada ? $zona_seleccionada->dueno->nombreCompleto() : 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Contratos: <span class=" font-normal">{{ $zona_seleccionada ? count($zona_seleccionada->contratos) : 'Sin Seleccionar' }}</span></p>
                    </div>
                </div>
                @if($zona_seleccionada)
                    <div class="mb-4 text-white">
                        <p class="text-xl">Información del Pago</p>

                        <div class="p-2">                    
                            <label for="zona_seleccionado" class="text-white">Metodo de Pago:</label>
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
                    <div class="mb-4 text-white">
                        <p class="text-xl">Periodo</p>

                        <div class="p-2">                    
                            <label for="zona_seleccionado" class="text-white">Desde:</label>
                            <br>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="desde" id="desde" wire:model='desde'>
                            <br>
                            <label for="zona_seleccionado" class="text-white">Hasta:</label>
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
    </script>
@endsection
