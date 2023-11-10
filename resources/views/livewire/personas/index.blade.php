<div class="mx-2 md:mx-[60px] mt-[20px]">
  <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
          <p class="text-fuente text-[40px] mb-[20px]">PERSONAS</p>
          <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
          <a href="{{route('personas_create')}}"><button class="btn-primary">Nueva persona</button></a>
        </div>
      </div>

        <!--Input de busqueda-->
      <div class="relative mt-[40px]">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="text" class="input-pdv pl-10" placeholder="Buscar persona..." wire:model="filtroNombre" wire:input="actualizarFiltroNombre">
        </div>

  <!--Tabla de datos-->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                      Nombre Completo
                  </th>
                  <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                      Celular
                  </th>
                  <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                      RFC
                  </th>
                  <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                      CURP
                  </th>
                  <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                      direccion
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach($personas as $persona)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 {{ $persona->id % 2 == 0 ? 'dark:bg-gray-800' : '' }}">
                <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="edit({{$persona->id}})">
                    {{$persona->nombreCompleto()}}
                </th>
                <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$persona->id}})">
                    {{$persona->celular}}
                </td>
                <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$persona->id}})">
                    {{$persona->rfc}}
                </td>
                <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$persona->id}})">
                    {{$persona->curp}}
                </td>
                <td class="px-6 py-4 dark:text-fuente cursor-pointer"  wire:click="edit({{$persona->id}})">
                    {{$persona->direccion}}
                </td>
            </tr>
            @endforeach

          </tbody>
      </table>
      <div class="px-[10px] py-[10px] bg-gray-700">
        {{ $personas->links('vendor.pagination.tailwind')}}
    </div>
  </div>
    

</div>
