<div>
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('pagos') }}" class="underline text-blue-500">PAGOS</a>
    </div>
    <div class="mx-2 md:mx-[60px] mt-[20px]">

        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">PAGOS</p>
                <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
                <a href="{{ route('nuevo_pago') }}"><button class="btn-primary">Nueva Pago</button></a>
            </div>
        </div>
    
        @if ($pagos)
            <!--Input de busqueda-->
            <div class="relative mt-[40px]">
                <p>Zona:</p>
                <select name="zona" id="zona" class="input-pdv" wire:input = "updateZonaInput" wire:model="selectedZona">
                    <option value="Cualquiera">Cualquiera</option>
                    @foreach($zonas as $zona)
                        <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    
       <!-- Tabla de datos -->
       <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
        @if ($pagos)
            <table>
                <thead>
                    <tr>
                        <th>
                            Zona
                        </th>
                        <th>
                            Periodo
                        </th>
                        <th>
                            Monto
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($pagos) > 0)
                        @foreach($pagos as $pago)
                            <tr class="hover:bg-gray-200 ease-out duration-100 cursor-pointer">
                                <td wire:click="detalle_pagos({{ $pago->id }})">
                                    {{$pago->zona->nombre}}
                                </td>
                                <td wire:click="detalle_pagos({{ $pago->id }})">
                                 {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_inicio)->format('d/m/Y') }} - 
                                 {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_final)->format('d/m/Y') }}
                                </td>
                                <td wire:click="detalle_pagos({{ $pago->id }})">
                                   $ {{ number_format($pago->monto ,2) }}
                                </td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente flex justify-center">
                                   <button class="btn-primary w-full">
                                    <p>ver</p>
                                   </button>
                                </td>
                            </tr>
                        @endforeach                        
                    @else
                    <tr>
                        <th colspan="8">
                            Sin Pagos
                        </th>
                    </tr>
                    @endif
                </tbody>
                
            </table>
            <div class="links">{{ $pagos->links('vendor.pagination.tailwind')}}</div>
        @else
            <p class="text-white">Sin Pagos Registrados</p>
        @endif
    </div>
</div>    

