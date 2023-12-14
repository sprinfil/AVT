<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!-- Cabecera -->
    <div class="w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px] justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">{{ $zona->nombre }}</p>
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <button class="btn-primary" wire:click="nuevo">Nueva Lote</button>

            <div class="mb-6">
                <div class="">
                    <h3 class=" my-10 font-semibold text-3xl text-gray-300">Lotes</h3>
                </div>
                <form>
                    <label for="filtro" class="text-gray-400">Filtrar por:</label> <br>
                    <select wire:model="filtro" name="filtro" id="filtro" class="rounded-lg p-1 w-[40%]">
                        <option value="0">Todos</option>
                        <option value="1">ID</option>
                        <option value="2">Número de Lote</option>
                        <option value="3">Clave Catastral</option>
                    </select>
                    @if ($filtro == 1)
                        <input type="number" placeholder="Ingresa un ID">
                    @endif
                    @if ($filtro == 2)
                        <input type="number" placeholder="Ingresa un Número de Lote">
                    @endif
                    @if ($filtro == 3)
                        <input type="text" placeholder="Ingresa una Clave Catastral">
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Tabla de datos -->
    @if (count($lotes) > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[20px]">
            <div class="mb-6">
                <!-- ... Resto de tu código ... -->
            
                <!-- Paginación -->
                <div class="">
                    {{ $lotes->links() }}
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Lote
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Precio
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
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lotes as $lote)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all {{ $lote->id % 2 == 0 ? 'dark:bg-gray-800' : '' }} cursor-pointer">
                        <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="edit({{$lote->id}})">
                            {{$lote->id}}
                        </th>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
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
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
                            {{ '$ ' . number_format($lote->precio, 2, '.', ',') }}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
                            {{ $lote->manzana ?? 'PENDIENTE' }}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
                            {{ $lote->catastral ?? 'PENDIENTE'}}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
                            {{ $lote->superficie ?? 'PENDIENTE'}}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$lote->id}})">
                            {{ 'PENDIENTE'}}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                            <button class="btn-primary font-400 bg-rojo h-full" wire:click="eliminar({{ $lote->id }})">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Lote
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Precio
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
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Acciones
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    @else
        <p class="text-white mt-5 p-2">No hay lotes registradas</p>
    @endif

    <div class="mb-10">
        <!-- ... Resto de tu código ... -->
    
        <!-- Paginación -->
        <div class="">
            {{ $lotes->links() }}
        </div>
    </div>
</div>

    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            window.addEventListener('success_delete', event => {
                Swal.fire({
                    position: 'center-middle',
                    icon: 'success',
                    title: 'Lote Elimnado con Exito',
                    showConfirmButton: false,
                    text: 'El Lote se ha eliminado correctamente',
                    timer: 1500,
                });
            });
        </script>
    @endsection