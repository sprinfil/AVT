<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">RESUMEN DE VENTA</p>
        </div>
    </div>

    <!--CONTENEDOR PRINCIPAL-->
    <div class="grid grid-cols-1 md:grid-cols-2 w-full my-7 gap-x-7 gap-y-7">
        <!--RESUMEN-->
        <div class="col-span-1">
            <div
                class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde md:mt-[0px] mt-[30px]">
                <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px]">
                    <p class="text-fuente text-[25px] mb-[20px]">RESUMEN</p>
                    <div class="w-full h-screen">
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
                        @if($contrato_generado)
                        <button class="btn-primary w-full mt-[20px]" wire:click="continuar"> Continuar</button>
                        @else
                        <button class="btn-primary w-full mt-[20px]" wire:click="generar_contrato"> Generar
                            Contrato</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-[30px] md:mt-[0px]">
            <!--IMPORTES-->
            @if ($importes != null)
                <div class="">
                    <p class="text-fuente text-[25px] ">IMPORTES Y VENCIMINETOS</p>
                    <!-- Tabla de datos -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">

                        <table class="w-full text-sm text-left text-gray-400">
                            <thead class="text-xs text-fuente uppercase bg-gray-700 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        Numero
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        Monto
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        Vencimineto
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($importes as $importe)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-500 transition-all">
                                        <th scope="row"
                                            class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente">
                                            {{ $importe->numero }}
                                        </th>
                                        <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                                            $ {{ $importe->monto }}
                                        </td>
                                        <td class="px-6 py-4 dark:text-fuente cursor-pointer">
                                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->format('d') }} de 
                                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->monthName }} del
                                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->format('Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-[10px] py-[10px] bg-gray-700">
                            {{ $importes->links() }}
                        </div>
                        <div>
                            @if($total_pagar > 0)
                            <p class="text-fuente text-[20px] mt-[20px]">Monto Restante: $ {{number_format( $total_pagar ,2)}}</p>
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

</div>
