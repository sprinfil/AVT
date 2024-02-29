<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!-- Cabecera -->


    <div class="w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px] justify-between">
            <p class="text-fuente text-[40px] mb-[2px]">{{ $zona->nombre }}</p>
            <p class="text-fuente text-[16px] mb-[20px]"><span class="font-bold"> Zona número: </span> {{ $zona->numero }}</p>
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <button class="btn-primary" wire:click="nuevo">Nuevo Lote</button>
        </div>
    </div>

    <div class="mb-6 mt-[20px]">
        <form>
            <label for="filtro" class="text-fuente">Filtrar por:</label> <br>
            <select wire:model="filtro" name="filtro" id="filtro" class="input-pdv"
                wire:input="actualizarNumFiltro">
                <option value="0">Sin filtro</option>
                <option value="1">Clave Catastral</option>
                <option value="2">Número de Lote </option>
            </select>
            @if ($filtro == 1)
                <input type="text" placeholder="Ingresa una Clave Catastral" class="input-pdv mt-[10px]"
                    wire:model="filtro_texto" wire:input="actualizarNumFiltro">
            @endif
            @if ($filtro == 2)
                <input type="number" placeholder="Ingresa un Número de Lote" class="input-pdv mt-[10px]"
                    wire:model="filtro_texto" wire:input="actualizarNumFiltro">
            @endif
        </form>
    </div>

    <!-- Tabla de datos -->
    @if (count($lotes) >= 1)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[20px]">
            <div class="mb-6">
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Lote
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Manzana
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Clave Catastral
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Superficie
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Estado
                        </th>
                        @if(auth()->user()->tipo == "ADMIN")
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                        
                        </th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lotes as $lote)
                        <tr
                            class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all {{ $lote->id % 2 == 0 ? 'dark:bg-gray-800' : '' }} cursor-pointer">
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer"
                                wire:click="edit({{ $lote->id }})">
                                @if ($lote->lote < 10)
                                    {{ '00' . $lote->lote }}
                                @endif
                                @if ($lote->lote >= 10 && $lote->lote < 100)
                                    {{ '0' . $lote->lote }}
                                @endif
                                @if ($lote->lote >= 100)
                                    {{ $lote->lote }}
                                @endif
                            </td>
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer"
                                wire:click="edit({{ $lote->id }})">
                                {{ $lote->manzana ?? 'PENDIENTE' }}
                            </td>
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer"
                                wire:click="edit({{ $lote->id }})">
                                {{ $lote->catastral ?? 'PENDIENTE' }}
                            </td>
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer"
                                wire:click="edit({{ $lote->id }})">
                              
                                {{ $lote->superficie ? $lote->superficie." m2" : 'PENDIENTE' }} 
                            </td>
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer"
                                wire:click="edit({{ $lote->id }})">
                                @if($lote->estado)
                                    @if($lote->estado == "EN PROCESO DE VENTA")
                                        <div class="px-2 py-2 bg-amber-800">
                                            {{ $lote->estado }}
                                        </div>
                                    @endif
                                    @if($lote->estado == "VENDIDO")
                                    <div class="px-2 py-2 bg-blue-700">
                                        {{ $lote->estado }}
                                    </div>
                                @endif
                                @else
                                <div class="px-2 py-2 bg-green-700">
                                    DISPONIBLE
                                </div>
                                @endif
                            </td>
                            @if(auth()->user()->tipo == "ADMIN")
                            <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                                    <div class="w-full justify-end flex items-center">
                                        <button class="btn-primary font-400 bg-rojo h-full px-10 py-3"
                                        wire:click="show_eliminar({{ $lote->id }})">Baja</button>
                                    </div>
                                  
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="mb-10">
              
            </div>
        </div>
    @else
        <p class="text-white mt-5 p-2">Sin datos.</p>
    @endif


</div>

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('success_delete', event => {
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Lote dado de baja',
                showConfirmButton: false,
                timer: 1500,
            });
        });

        window.addEventListener('show_eliminar', event => {
            Swal.fire({
                title: "¿Dar de baja lote?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('eliminar')
                }
            });
        });
    </script>
@endsection
