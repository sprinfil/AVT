<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!-- Cabecera -->
    <div class="w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px] justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">Zonas</p>
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <button class="btn-primary" wire:click="abrirModal">Nueva Zona</button>
        </div>
    </div>

    <!-- Tabla de datos -->
    @if (count($zonas) > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Dueño
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Lotes
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($zonas as $zona)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all {{ $zona->id % 2 == 0 ? 'dark:bg-gray-800' : '' }} cursor-pointer">
                        <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="ver({{ $zona }}) ">
                            {{$zona->nombre}}
                        </th>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="ver({{ $zona }}) ">
                            {{$zona->dueno->nombreCompleto()}}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="ver({{ $zona }}) ">
                            {{ $zona->lotes->count() }}
                        </td>
                        <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                            <button class="btn-primary font-400 bg-green h-full" wire:click="edit({{$zona->id}})">Editar</button>
                            <button class="btn-primary font-400 bg-rojo h-full" wire:click="eliminar({{ $zona->id }})">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-white mt-5 p-2">No hay Zonas registradas</p>
    @endif

    @if ($this->showModal)
        <div>
            <div x-data="{ showModal: @entangle('showModal') }">
                <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="p-2 bg-principal">
                                @if ($this->editando)
                                    <h3 class="text-white font-bold text-lg ml-[17px]">Editar Zona</h3>
                                @else
                                    <h3 class="text-white font-bold text-lg ml-[17px]">Agregar Zona</h3>
                                @endif
                            </div>
                            <div class="bg-gray-100">
                                <!-- Formulario para agregar nueva zona -->
                                @if ($this->editando)
                                    <form wire:submit.prevent="editar({{ $this->zona_id }})">
                                @else
                                    <form wire:submit.prevent="guardarZona">
                                @endif
                                    <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <!-- Campos del formulario -->
                                        <div class="mb-4">
                                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                            <input wire:model="nombre" type="text" id="nombre" name="nombre" placeholder="Nombre de la Zona" class="input-pdv">
                                            @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="dueno_id" class="block text-gray-700 text-sm font-bold mb-2">Dueño</label>
                                            <input type="text" class="input-pdv mb-[15px]" placeholder="Buscar..." wire:model="filtroNombre" wire:input="actualizarFiltroNombre">
                                            <select wire:model="dueno_id" id="dueno_id" name="dueno_id" class="input-pdv">
                                                @if ($this->editando == true)
                                                    <option value="" selected >{{ $nombre_dueno_zona }} -- Actual Dueño</option>
                                                @endif
                                                @foreach ($personas as $persona)
                                                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellido_1 }} {{ $persona->apellido_2 }}</option>
                                                @endforeach
                                            </select>
                                            @error('dueno_id') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        @if (!$this->editando)
                                            <div class="mb-4">
                                                <label for="numero_lotes" class="block text-gray-700 text-sm font-bold mb-2">Número de Lotes</label>
                                                <input wire:model="numero_lotes" type="number" name="numero_lotes" id="numero_lotes" placeholder="Número de Lotes en la Zona" class="input-pdv">
                                                @error('numero_lotes') <span class="text-red-500">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-4">
                                                <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio</label>
                                                <input wire:model="precio" type="number" id="precio" name="precio" placeholder="Precio por Lote"  class="input-pdv">
                                                @error('precio') <span class="text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                        @endif
                                    </div>
                                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-2">
                                        <button type="submit" class="btn-primary">Aceptar</button>
                                        <button type="button" class="btn-secondary ml-3" wire:click="cerrarModal">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('success', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Zona Creada con Exito',
            showConfirmButton: false,
            text: 'La zona y el numero de lotes se han creado correctamente',
            timer: 1500,
        });
    });
    window.addEventListener('success_delete', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Zona Elimnada con Exito',
            showConfirmButton: false,
            text: 'La zona se ha eliminado correctamente',
            timer: 1500,
        });
    });
    window.addEventListener('success_edit', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Zona Editada con Exito',
            showConfirmButton: false,
            text: 'La zona se ha editado correctamente',
            timer: 1500,
        });
    });
</script>
@endsection
