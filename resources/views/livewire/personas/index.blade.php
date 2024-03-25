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
      <table>
          <thead>
              <tr>
                  <th scope="col" class="text-center">
                    Personas
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach($personas as $persona)
            <tr class="hover:bg-gray-200 ease-out duration-100 cursor-pointer ">
                <td class="td" wire:click="edit({{$persona->id}})">
                    <div class="flex items-center gap-x-7">
                        <div class="min-w-[50px] hidden">
                            <img src="{{ $persona->foto }}" alt="" class="w-[70px] rounded-md">    
                        </div>
                        <div>
                            <p class="underline">{{$persona->nombreCompleto()}}</p>
                            <p>{{$persona->celular}}</p>
                            @if($persona->correo == null)
                            <p>Sin Correo</p>
                            @else
                            <p>{{$persona->correo}}</p> 
                            @endif
                        </div>
                        <div class="w-full flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                              </svg>
                        </div> 
                    </div>
                </td>           
   
            </tr>
            @endforeach

          </tbody>
      </table>
      <div class="links">
        {{ $personas->links('vendor.pagination.tailwind')}}
    </div>
  </div>
    

</div>
