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
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" class="input-pdv pl-10" placeholder="No. Contrato" wire:model="filtroPagos"
                    wire:input="actualizarFiltroPagos">
            </div>
        @endif
    
       <!-- Tabla de datos -->
       <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
        @if ($pagos)
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-[20px]">
                    <tr class="text-[15px]">
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            No. Pago
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            Monto
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            Venta
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            Metodo de Pago
                        </th>
                        <th scope="col" class="px-6 py-3 text-fuente ">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagos as $pago)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all  cursor-pointer text-[18px]" >
                            <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                                No. {{$pago->id}}
                            </th>
                            <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                                $ {{$pago->monto}}
                            </th>
                            <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                                {{ \Carbon\Carbon::parse($pago->fecha)->format('d-m-Y') }}
                            </th>
                            <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                                {{$pago->venta}}
                            </th>
                            <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                                {{$pago->metodo}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente flex justify-center">
                                <button class="bg-red-600 rounded-lg p-2 mx-2" wire:click='pdf({{ $pago->id }})'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"></path>
                                      </svg>
                                </button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-[10px] py-[10px] bg-gray-700">{{ $pagos->links('vendor.pagination.tailwind')}}</div>
        @else
            <p class="text-white">Sin Pagos Registrados</p>
        @endif
    </div>
</div>    

