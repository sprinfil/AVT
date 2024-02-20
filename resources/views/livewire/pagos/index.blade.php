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
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagos as $pago)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all  cursor-pointer text-[18px]" >
                        <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente" wire:click="detalle_pagos({{ $pago->id }})">
                            NO. {{$pago->id}}
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

