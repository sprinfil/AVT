<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!-- Cabecera -->
    <div class="w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px] justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">USUARIOS</p>
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <button class="btn-primary" wire:click="abrirModal">Nuevo Usuario</button>
        </div>
    </div>

    <!-- Input de búsqueda -->
    <div class="relative mt-[40px]">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="text" class="input-pdv pl-10" placeholder="Buscar Usuario..." wire:model="filtroNombre" wire:input="actualizarFiltroUsuario">
    </div>

    <!-- Tabla de datos -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                        Nombre Completo
                    </th>
                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                        Usuario
                    </th>
                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                        Tipo
                    </th>
                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all {{ $usuario->id % 2 == 0 ? 'dark:bg-gray-800' : '' }}">
                    <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="edit({{$usuario->id}})">
                        {{$usuario->name}}
                    </th>
                    <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$usuario->id}})">
                        {{$usuario->username}}
                    </td>
                    <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$usuario->id}})">
                        {{$usuario->tipo}}
                    </td>
                    <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                        <button class="btn-primary  bg-rose-900" wire:click="eliminarUsuario({{ $usuario->id }})">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-[10px] py-[10px] bg-gray-700">
            {{ $usuarios->links() }}
        </div>
    </div>

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
                                    <h3 class="text-white font-bold text-lg">Editar Usuario</h3>
                                @else
                                    <h3 class="text-white font-bold text-lg">Agregar Usuario</h3>
                                @endif
                            </div>
                            <div class="bg-gray-100">
                                <!-- Formulario para agregar nuevo usuario -->
                                @if ($this->editando)
                                    <form wire:submit.prevent="editar({{ $this->usuarioEdit }})">
                                @else
                                    <form wire:submit.prevent="guardarUsuario">
                                @endif
                                    <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <!-- Campos del formulario -->
                                        <div class="mb-4">
                                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre Completo</label>
                                            <input wire:model="name" type="text" id="name" name="name" class="input-pdv">
                                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico</label>
                                            <input wire:model="email" type="email" id="email" name="email" class="input-pdv">
                                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Usuario</label>
                                            <input wire:model="username" type="text" id="username" name="username" class="input-pdv">
                                            @error('username') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                            <input wire:model="password" type="password" id="password" name="password" class="input-pdv">
                                            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo</label>
                                            <select wire:model="tipo" id="tipo" name="tipo" class="input-pdv">
                                                <option value="" disabled>--Seleccionar un tipo--</option>
                                                <option value="ADMIN" selected>ADMIN</option>
                                                <option value="GENERAL">GENERAL</option>
                                            </select>
                                            @error('tipo') <span class="text-red-500">{{ $message }}</span> @enderror
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

    <div>
        @if ($this->esconder == 'visible')
            
            <div>
            
            <!--///////Div para agregar transparencia//////-->
                <div class="bg-black w-screen h-screen z-[10] absolute top-0 left-0 opacity-60 "></div>
         
                <!--///////Div contenedor para centrar el modal//////-->
                <div class="w-screen h-screen z-[30] absolute top-0 left-0 items-center justify-center flex transform scale-100 transition-transform ease-in duration-300" >
             
                        <!--///////Contenedor del modal//////-->
                     <div class="bg-negro-menu rounded-md overflow-auto md:w-[800px] w-full md:h-auto h-auto">
                         <div class=" text-fuente text-[20px] shadow-lg bg-principal rounded-md px-5 py-2 border-b border-fuente flex justify-center">
                             <p class="text-fuente text-[20px]">ADVERTENCIA</p>
                          </div>
         
                           <!--///////Icono del modal (contenedor superior)//////-->
                           <div class="w-full h-[200px] flex items-center justify-center">
                             <p class="text-fuente text-[20px]">¿Seguro que deseas eliminar el usuario <span class="text-fuente text-[20px] underline">{{$usuarioEn->username}}</span>?</p>
                           </div>
                             
                             <!--///////Botones (contenedor inferior)//////-->
                             <div class="bg-terciario w-full h-[100px] flex justify-end py-5">
                                 <p class="btn-primary right-0 mr-5 bg-rojo items-center flex cursor-pointer" wire:click="salir">Cancelar</p>
                                 <button class="btn-primary right-0 mr-5" wire:click="delete"> Aceptar </button>
                             </div>
     
                            </div>
                        </div>
                    </div>
        @endif
    </div>
</div>

@section('js')
    <script src="{{ asset('js/sweetalert.js') }}"></script>

    <script>
        window.addEventListener('success', event => {
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Usuario Creado',
                showConfirmButton: false,
                text: 'El usuario se ha creado correctamente',
                timer: 1500,
            });
        });
    </script>

    <script>
        window.addEventListener('successEdit', event => {
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Usuario Guardado',
                showConfirmButton: false,
                text: 'El usuario se ha guardado correctamente',
                timer: 1500,
            });
        });
    </script>
    
    <script>
        window.addEventListener('successDelete', event => {
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Usuario Eliminado',
                showConfirmButton: false,
                text: 'El usuario se ha eliminado correctamente',
                timer: 1500,
            });
        });
    </script>
@endsection
