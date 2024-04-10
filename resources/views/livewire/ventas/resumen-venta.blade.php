<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">RESUMEN DE VENTA</p>
        </div>
    </div>

    <!--CONTENEDOR PRINCIPAL-->
    <div class="grid grid-cols-1 xl:grid-cols-2 w-full my-7 gap-x-7 gap-y-7">
        <!--RESUMEN-->
        <div class="col-span-1 mb-[40px]">
            <div
                class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde md:mt-[0px] mt-[30px]">
                <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px] ">
                    <p class="text-fuente text-[25px] mb-[20px]">RESUMEN</p>
                    <div class="w-full">
                        <p class="text-fuente">Comprador</p>
                        <input wire:model = "compradorMostrar" type="text" class="input-pdv mb-[20px] w-full"
                            disabled placeholder="Comprador">
                        <p class="text-fuente">Aval</p>
                        <input wire:model = "avalMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Aval">
                        <p class="text-fuente">Vendedor</p>
                        <input wire:model = "vendedorMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Vendedor">
                        <p class="text-fuente">Zona</p>
                        <input wire:model = "zonaMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Zona">
                        <p class="text-fuente">Lote</p>
                        <input wire:model = "loteMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="lote">
                        <p class="text-fuente">Metodo de pago</p>
                        <input wire:model = "metodo_pago" type="text" class="input-pdv mb-[20px] w-full" disabled
                            placeholder="Metodo de pago">
                        <p class="text-fuente">Costo del Lote</p>
                        <p class="text-fuente mb-[20px]">$ @if ($venta->costo_lote != null)
                                {{ number_format($venta->costo_lote, 2) }}
                            @endif
                        </p>
                        @if ($venta->metodo_pago == 'A MESES')
                            <p class="text-fuente">Enganche</p>
                            <p class="text-fuente  mb-[20px]">$ @if ($venta->enganche != null)
                                    {{ number_format($venta->enganche, 2) }}
                                @endif
                            </p>
                            <p class="text-fuente">Meses a pagar</p>
                            <p class="text-fuente  mb-[20px]">{{ $venta->meses_pagar }}</p>

                            <p class="text-fuente">Monto por mes</p>
                            <p class="text-fuente  mb-[20px]">$ @if ($venta->monto_mes != null)
                                    {{ number_format($venta->monto_mes, 2) }}
                                @endif
                            </p>
                        @endif
                        @if ($venta->metodo_pago == 'CONTADO')
                            <p class="text-fuente">Forma de pago</p>
                            <p class="text-fuente mb-[20px]">{{ $venta->forma_de_pago }}</p>
                            @if ($venta->forma_de_pago == 'EFECTIVO')
                                <p class="text-fuente">Pago con ...</p>
                                <p class="text-fuente  mb-[20px]">$ @if ($venta->pago_con != null)
                                        {{ number_format($venta->pago_con, 2) }}
                                    @endif
                                </p>
                                <p class="text-fuente">Cambio</p>
                                <p class="text-fuente  mb-[20px]">$ @if ($venta->cambio != 0)
                                        {{ number_format($venta->cambio, 2) }}@else{{ number_format(0, 2) }}
                                    @endif
                                </p>

                            @endif
                            @if ($venta->forma_de_pago == 'TARJETA CREDITO')
                                <p class="text-fuente">Referencia</p>
                                <p class="text-fuente">{{ $venta->referencia }}</p>
                            @endif
                            @if ($venta->forma_de_pago == 'TARJETA DEBITO')
                                <p class="text-fuente">Referencia</p>
                                <p class="text-fuente">{{ $venta->referencia }}</p>
                            @endif
                        @endif
                        <a href="{{ route('index_detalle_venta',['venta_id'=>$venta->id]) }}">
                            <button class="btn-primary w-full mt-[20px]">Ver Compra Venta</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-[30px] md:mt-[0px]">
            <!--IMPORTES-->
            @if (count($importes) > 0)
                <div class="">
                    <p class="text-fuente-secundario text-[25px] ">IMPORTES Y VENCIMINETOS</p>
                    <!-- Tabla de datos -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">

                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Numero
                                    </th>
                                    <th>
                                        Monto
                                    </th>
                                    <th>
                                        Vencimineto
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($importes as $importe)
                                    @if ($importe->numero != 0)
                                        <tr>
                                            <th scope="row">
                                                {{ $importe->numero }}
                                            </th>
                                            <td>
                                                $ {{ number_format($importe->monto, 2) }}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->format('d') }}
                                                de
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->monthName }}
                                                del
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->format('Y') }}
                                            </td>
                                            <td>
                                                <div class="flex gap-3">
                                                    <div class="hover:cursor-pointer p-2 bg-gray-100 hover:bg-gray-200 ease-in duration-100 rounded-md" wire:click="modificar_monto_alert({{$importe->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                          </svg>
                                                          
                                                    </div>
                                                    <div wire:click="reiniciar_monto({{$importe->id}})" class="hover:cursor-pointer p-2 bg-gray-100 hover:bg-gray-200 ease-in duration-100 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                          </svg>
                                                          
                                                    </div>
                                                </div>
                                           
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="links">
                            {{ $importes->links() }}
                        </div>
                        <div>
                            @if ($total_pagar > 0)
                                <p class="text-fuente-secundario text-[20px] mt-[20px]">Monto Restante: $
                                    {{ number_format($total_pagar, 2) }}</p>
                            @endif
                        </div>
                    </div>

                    <!--FIN IMPORTES-->
                @else
                    <p class="text-fuente text-[25px]">SIN IMPORTES.</p>
            @endif
        </div>
    </div>


    <!--FIN-->
</div>

<script>
    window.addEventListener('modificar_monto_alert', event => {
        Swal.fire({
            title: `Nuevo Monto (${event.detail.data['fecha']}):`,
            input: 'number',
            inputPlaceholder: `$ ${event.detail.data['monto']}`,
            showCancelButton: true,
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            preConfirm: (monto) => {
                console.log('Nombre ingresado:', monto);
                @this.dispatch('validar_importe',[monto]);
            },

            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
             
            }
        })
    })
</script>
