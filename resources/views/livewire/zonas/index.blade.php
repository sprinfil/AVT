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
            <table>
                <thead>
                    <tr>
                        <th scope="col">
                            Nombre
                        </th>
                        <th scope="col">
                            Numero
                        </th>
                        <th scope="col">
                            Propietario
                        </th>
                        <th scope="col">
                            Lotes
                        </th>
                        <th scope="col" >
                            Imagen
                        </th>
                        <th scope="col" >
                           
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($zonas as $zona)
                    <tr class="">
                        <td>
                            {{$zona->nombre}}
                        </td>
                        <td >
                            {{$zona->numero ?? 'Sin Asignar'}}
                        </td>
                        <td>
                            {{$zona->dueno->nombreCompleto()}}
                        </td>
                        <td >
                            {{ $zona->lotes->whereNull('baja')->count() }}
                        </td>
                        <td >
                            <img src="{{'/storage/imagenes_zonas/'.$zona->imagen_general}}" alt="" class="w-[75px]">
                        </td>
                        <td >
                            <div class="w-full justify-end flex items-center">
                                <button class="btn-primary font-400 bg-green h-full mr-[10px] px-10 py-3" wire:click="ver({{ $zona }}) ">Ver Lotes</button>
                                <button class="btn-primary font-400 bg-green h-full mr-[10px] px-10 py-3" wire:click="edit({{$zona->id}})">Editar</button>
                                <button class="btn-primary-red font-400  h-full px-10 py-3"  wire:click="show_eliminar({{ $zona->id }})">Baja</button>
                            </div>
                          
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
                                        <!-- Campos del formulario -->
                                        <div class="mb-4">
                                            <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Numero</label>
                                            <input wire:model="numero" type="number" id="numero" name="numero" placeholder="Numero de la Zona" class="input-pdv">
                                            @error('numero') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="dueno_id" class="block text-gray-700 text-sm font-bold mb-2">Propietario</label>
                                            <input type="text" class="input-pdv mb-[15px]" placeholder="Buscar..." wire:model="filtroNombre" wire:input="actualizarFiltroNombre">
                                            <select wire:model="dueno_id" id="dueno_id" name="dueno_id" class="input-pdv">
                                                @if ($this->editando == true)
                                                    <option value="" selected >{{ $nombre_dueno_zona }} -- Actual Propietario</option>
                                                @endif
                                                @foreach ($personas as $persona)
                                                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellido_1 }} {{ $persona->apellido_2 }}</option>
                                                @endforeach
                                            </select>
                                            @error('dueno_id') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>

                                        @if (!$this->editando)
                                            <div class="mb-4">
                                                <label for="numero_manzanas" class="block text-gray-700 text-sm font-bold mb-2 hidden">Número de Manzanas</label>
                                                <input wire:model="numero_manzanas" type="number" name="numero_manzanas" id="numero_manzanas" placeholder="Número de Manzanas en la Zona" class="input-pdv hidden">
                                                @error('numero_manzanas') <span class="text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label for="numero_lotes" class="block text-gray-700 text-sm font-bold mb-2 hidden">Número de Lotes</label>
                                                <input wire:model="numero_lotes" type="number" name="numero_lotes" id="numero_lotes" placeholder="Número de Lotes en la Zona" class="input-pdv hidden">
                                                @error('numero_lotes') <span class="text-red-500">{{ $message }}</span> @enderror
                                            </div>

                                        @endif
                                        <div class="mb-4">
                                            <label for="imagen_general" class="block text-gray-700 text-sm font-bold mb-2">Imagen general</label>
                                            <input wire:model="imagen_general" type="file" name="imagen_general" id="imagen_general" class="input-pdv">
                                            @error('imagen_general') <span class="text-red-500">{{ $message }}</span> @enderror
                                            <p>imagen para los reportes</p>
                                        </div>
                                        <div class="mb-4">
                                            <label for="imagen_contrato" class="block text-gray-700 text-sm font-bold mb-2">Imagen para contratos</label>
                                            <input wire:model="imagen_contrato" type="file" name="imagen_contrato" id="imagen_contrato" class="input-pdv">
                                            @error('imagen_contrato') <span class="text-red-500">{{ $message }}</span> @enderror
                                            <p>imagen para los contratos</p>
                                        </div>
                                        <div class="mb-4">
                                            <label for="color" class="block text-gray-700 text-sm font-bold mb-2">color</label>
                                            <input wire:model="color" type="color" name="color" id="color" class="">
                                            @error('color') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Antecedentes</label>
                                            <textarea name="antecedentes" id="" cols="30" rows="10" class="input-pdv" wire:model="antecedentes"></textarea>
                                            @error('antecedentes') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
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
            title: 'Zona dada de baja con exito',
            showConfirmButton: false,
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
    window.addEventListener('show_eliminar', event => {
            Swal.fire({
                title: "¿Dar de baja zona?",
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
