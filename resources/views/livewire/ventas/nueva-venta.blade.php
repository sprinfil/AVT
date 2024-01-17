<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">NUEVA VENTA</p>
        </div>
    </div>

    <!--CONTENEDOR PRINCIPAL-->
    <div class="grid grid-cols-3 w-full  my-7 gap-x-7">
        <!--RESUMEN-->
        <div class="col-span-1">
            <div
                class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
                <div class="mx-[10px] md:mx-[50px] justify-center items-center">
                    <p class="text-fuente text-[25px] mb-[20px]">RESUMEN</p>
                    <div class="w-full h-screen">
                        <p class="text-fuente">Comprador</p>
                        <input wire:model = "compradorMostrar" type="text" class="input-pdv mb-[20px] w-full"
                            disabled placeholder="Comprador">
                        <p class="text-fuente">Aval</p>
                        <input wire:model = "avalMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Aval">
                        <p class="text-fuente">Zona</p>
                        <input wire:model = "zonaMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Zona">
                            <p class="text-fuente">Lote</p>
                            <input wire:model = "loteMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                                placeholder="lote">
                    </div>
                </div>
            </div>
        </div>

        <!--CONTENEDOR PARA IR SELECCIONANDO-->
        <div class="col-span-2 gap-x-10 ">
            <div class="">
                <p class="text-fuente text-[25px]">Comprador</p>

                <!--Input de busqueda-->
                <div class="relative mt-[10px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar persona..."
                        wire:model="filtroComprador" wire:input="actualizarFiltroComprador">
                </div>

                <!--SELECT COMPRADOR-->
                <select name="comprador" id="comprador" class="input-pdv mt-[10px] w-full"
                    wire:change = "SeleccionarComprador" wire:model = "compradorLista">
                    <option value="" selected >--SELECCIONAR--</option>
                    @foreach ($compradores as $comprador)
                        <option value="{{ $comprador->id }}">{{ $comprador->nombreCompleto() }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <p class="text-fuente text-[25px] mt-[30px]">Aval</p>

                <!--Input de busqueda-->
                <div class="relative mt-[10px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar persona..."
                        wire:model="filtroAval" wire:input="actualizarFiltroAval">
                </div>

                <!--SELECT AVAL-->
                <select name="aval" id="aval" class="input-pdv mt-[10px] w-full" wire:change = "SeleccionarAval"
                    wire:model = "avalLista">
                    <option value="" selected >--SELECCIONAR--</option>
                    @foreach ($avales as $aval)
                        <option value="{{ $aval->id }}">{{ $aval->nombreCompleto() }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <p class="text-fuente text-[25px] mt-[30px]">Zona</p>

                <!--Input de busqueda-->
                <div class="relative mt-[10px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar Zona..."
                        wire:model="filtroZona" wire:input="actualizarFiltroZona">
                </div>

                <!--SELECT ZONA-->
                <select name="zona" id="ZONA" class="input-pdv mt-[10px] w-full" wire:change = "SeleccionarZona"
                    wire:model = "zonaLista">
                    <option value="" selected >--SELECCIONAR--</option>
                    @foreach ($zonas as $zona)
                        <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <p class="text-fuente text-[25px] mt-[30px]">Lote</p>

                <!--SELECT LOTE-->
                <select name="lote" id="lote" class="input-pdv mt-[10px] w-full"
                    wire:change = "SeleccionarLote" wire:model = "loteLista" @if($desactivarLotes) disabled @endif>
                    <option value="" selected >--SELECCIONAR--</option>
                    @foreach ($lotes as $lote)
                        <option value="{{ $lote->id }}">{{ $lote->lote }} </option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>

</div>
