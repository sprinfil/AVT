<div>
    <div class="p-5 w-[90%] m-auto mt-5 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <p class="text-white text-xl">Información del Contrato</p>
        <form wire:submit.prevent="submit" class="mt-5">

            <div class="my-5">
                <label for="numero_contrato" class="text-white">No. de Contrato:</label>
                <br>
                <input type="text" wire:model='numero_contrato' wire:change='actualizar_filtro' placeholder="No. de Contrato" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-5">
                <label for="contrato_seleccionado" class="text-white">Contrato:</label>
                <br>
                <select name="contrato" id="contrato" wire:model='contrato' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="selecciona" disabled selected>--Selecciona un Contrato--</option>
                    @foreach ($ventas as $venta)
                        <option value="{{ $venta->id }}">Lote:{{ $venta->lote }} Zona:{{ $venta->Zona->nombre }} Comprador: {{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</option>
                    @endforeach
                </select>
            </div>

            <div class="sm:block md:flex md:justify-between md:items-center">
                <div class="mb-4">
                    <label for="monto" class="block text-gray-200 text-sm font-bold mb-2">Monto:</label>
                    <input wire:model="monto" type="text" id="monto" name="monto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>                
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Guardar Pago
                </button>
            </div>
        </form>
    </div>

</div>
