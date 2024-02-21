<div>
    <div class="p-5 w-[90%] m-auto mt-5 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde mb-12">
        <p class="text-white text-xl">Buscar Contrato</p>
        <form wire:submit.prevent="submit" class="mt-5">

            <div class="my-5">
                <label for="numero_contrato" class="text-white">No. de Contrato:</label>
                <br>
                <input type="text" wire:model='numero_contrato' wire:input='actualizar_filtro' placeholder="No. de Contrato" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-5">
                <label for="contrato_seleccionado" class="text-white">Contrato:</label>
                <br>
                <select name="contrato" id="contrato" wire:model='contrato' wire:change='actualizar_contrato' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="selecciona" disabled selected>--Selecciona un Contrato--</option>
                    @foreach ($ventas as $venta)
                        <option value="{{ $venta->id }}">Lote:{{ $venta->lote }} Zona:{{ $venta->Zona->nombre }} Comprador: {{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</option>
                    @endforeach
                </select>
            </div>

            <div class="sm:block md:flex md:justify-between py-5 px-10">
                <div class="mb-4 text-white">
                    <p class="text-xl">Información del Contrato</p>
                    <div class="p-2">
                        <p class="font-bold">No. Contrato: <span class=" font-normal">{{ $contrato_venta->id ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Contrato: <span class=" font-normal">{{ $contrato_venta->contrato ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Comprador: <span class=" font-normal">{{ $contrato_venta ? $contrato_venta->CompradorNombre() : 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Vendedor: <span class=" font-normal">{{ $contrato_venta ? $contrato_venta->VendedorNombre() : 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Zona: <span class=" font-normal">{{ $contrato_venta->Zona->nombre ?? 'Sin Seleccionar' }}</span></p>
                        <p class="font-bold">Lote: <span class=" font-normal">{{ $contrato_venta->Lote->lote ?? 'Sin Seleccionar' }}</span></p>
                    </div>
                </div>                
                <div class="mb-4 text-white">
                    <p class="text-xl">Información del Pago</p>

                    <div class="p-2">
                        <p class="font-bold">Pago Maximo: <span class=" font-normal">{{ $monto_maximo ? '$ ' . $monto_maximo . ' MXN' : 'Sin Monto' }}</span></p>
                        <br>
                        <label for="monto" class="block text-gray-200 text-sm font-bold mb-2">Monto del Pago a Aplicar:</label>
                        <input wire:model="monto" wire:input='actualizar_monto' type="number" id="monto" name="monto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Monto" value="0">

                        <label for="contrato_seleccionado" class="text-white">Metodo de Pago:</label>
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

        window.addEventListener('error_monto', event => {
            Swal.fire({
                icon: "error",
                title: "Error en Monto",
                text: "El monto debe ser mayor a 0",
            });
        });

        window.addEventListener('error_metodo', event => {
            Swal.fire({
                icon: "error",
                title: "Error en Metodo de Pago",
                text: "Selecciona un Metodo de Pago",
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
