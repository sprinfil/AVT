<div>
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('ventas') }}" class="underline text-blue-500">VENTAS</a>
    </div>
    <div class="mx-2 md:mx-[60px] mt-[20px]">

        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">VENTAS</p>
                <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
                <a href="{{ route('nueva_venta') }}"><button class="btn-primary">Nueva venta</button></a>
            </div>
        </div>
    
        <!--Inputs de busqueda-->
        <div class="flex gap-4 mt-[40px] flex-wrap">
            <div class="">
                <p class="text-fuente-secundario mb-[10px]">Comprador</p>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10" placeholder="Comprador" wire:model="filtroComprador"
                        wire:input="actualizarFiltroComprador">
                </div>
            </div>

            <div class="">
                <p class="text-fuente-secundario mb-[10px]">Clave Catastral</p>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10 mascara-catastral" placeholder="Clave Catastral" wire:model="filtroCatastral"
                        wire:input="actualizarFiltroCatastral">
                </div>
            </div>

            <div class="">
                <p class="text-fuente-secundario mb-[10px]">Numero de contrato</p>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" class="input-pdv pl-10 w-[180px]" placeholder="No Contrato" wire:model="filtroContrato"
                        wire:input="actualizarFiltroContrato">
                </div>
            </div>

        </div>

    
       <!-- Tabla de datos -->
       <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">
        <table>
            <thead >
                <tr >
                    <th >
                        Contrato
                    </th>
                    <th >
                        Comprador
                    </th>
                    <th >
                        Clave Catastral
                    </th>
                    <th >
                        PROXIMO COBRO
                    </th>
                    <th >
                        Monto
                    </th>
                    <th >
                        EXPIRO LA FECHA
                    </th>
                    <th >
                        CONTACTAR CON EL COMPRADOR
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                <tr >
                    <td scope="row"  >
                        {{$venta->no_contrato}}
                    </td>
                    <td scope="row"  >
                        {{$venta->Comprador->nombreCompleto()}}
                    </td>
                    <td scope="row"  >
                        {{$venta->Lote->catastral}}
                    </td>
                    <td scope="row"  >
                        @if($venta->proximo_cobro())
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->proximo_cobro()->vencimiento )->format('d') }}
                        de
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->proximo_cobro()->vencimiento )->monthName }}
                        del
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->proximo_cobro()->vencimiento )->format('Y') }}
                        @else
                        Sin proximo cobro
                        @endif
                    </td>
                    <td scope="row"  >
                        {{ $venta->proximo_cobro() == null ? '$ 0' : '$ '. number_format($venta->proximo_cobro()->monto, 2, ',', '.')}}
                    </td>
                    <td scope="row" class="text-fuente text-center">
                        @if($venta->proximo_cobro())
                            @if($venta->proximo_cobro() != null && $venta->proximo_cobro()->vencimiento < Carbon\Carbon::now())
                                <div class="px-2 py-3 bg-red-500 ">
                                    EXPIRO
                                </div>
                              
                            @else
                            <div class="px-2 py-3 bg-green-700 ">
                                A TIEMPO
                            </div>
                            @endif
                        @else
                        <div class="px-2 py-3 bg-blue-700 ">
                            PAGADO
                        </div>
                        @endif
                    </td>

                    <td scope="row"  >
                        <div class="flex h-[50px] text-fuente">
                            <a href="https://wa.me/52{{$venta->Comprador->celular}}?text=Hola%20{{ $venta->Comprador->nombre }}%20Nos%20comunicamos%20con%20usted%20por%20parte%20de%20Empresa%20para%20Informarle%20que%20su%20fecha%20de%20pago%20del%20{{$venta->proximo_cobro()!=null  ? Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->proximo_cobro()->vencimiento )->format('d/m/Y') : 'Sin proximo cobro'}}%20con un monto total de%20$%20{{ $venta->proximo_cobro() != null ? number_format($venta->proximo_cobro()->monto,2)  : 'sin monto'}}%20para el lote%20{{ $venta->Lote->lote }} %20de%20{{$venta->Zona->nombre}} %20a%20expirado%20le%20pedimos%20de%20la%20manera%20mas%20atenta%20que%20realice%20su%20pago,%20gracias%20buen%20día." target="_blank" class="flex items-center">
                                <div class="py-0 px-5 bg-principal rounded-md flex items-center h-[50px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48" class="w-11">
                                        <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="ml-[20px]">WhatsApp</p>
                                </div>
                            </a>
                            <a href="tel: {{ $venta->Comprador->celular }}" class="">
                                
                            <div class="text-green-500 bg-principal rounded-md p-1 h-[50px] ml-5 cursor-pointer flex items-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9  ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                  </svg>
                             
                                  <p class="ml-[20px]">Marcar</p>
                            </div>
                        </a>
                        </div>
                       
                    </td>

                    <td>
                        <button class="btn-primary w-full" wire:click="detalle_venta({{ $venta->id }})">Ver</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="links">
            {{ $ventas->links('vendor.pagination.tailwind')}}
        </div>
    </div>
</div>
@section('js')
    <script>
        $(document).ready(function() {
            console.log("jQuery cargado correctamente");
            $('.mascara-dinero').mask('000,000,000,000,000', {
                reverse: true
            });
            $('.mascara-catastral').mask('000-000-000-000-000', {
            });
        });
    </script>

@endsection

