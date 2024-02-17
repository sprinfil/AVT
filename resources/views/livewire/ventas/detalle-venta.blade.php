<div class="mx-2 md:mx-[60px] mt-[20px]">
    <div>
        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">Contrato No. {{ $venta->id }}</p>
            </div>
        </div>

        <!--CONTENEDOR PRINCIPAL-->
        <div class="flex flex-col w-full my-7 gap-x-7 gap-y-7">
            @if ($importes != null)
                @if (count($importes) > 0)
                    <div class="mt-[30px] md:mt-[0px]">
                        <!--ABONAR-->
                        <div class="bg-negro-menu py-10 rounded-md mb-[50px] px-[10px] md:px-[50px]">
                            @if ($error == true)
                                <div
                                    class="h-[20px] w-full bg-red-500 text-fuente py-4 px-4 flex justify-center items-center rounded-lg">
                                    <div>
                                        <p>Llena todos los campos</p>
                                    </div>
                                </div>
                            @endif
                            <p class="text-fuente text-[25px]">Abonar</p>
                            <p class="text-fuente text-[15px] mt-[20px]">Forma de pago</p>
                            <select name="metodo_pago" id="metodo_pago" class="input-pdv mt-[10px] w-full"
                                wire:model="forma_de_pago" wire:change="cambio_forma_de_pago">
                                <option value="" selected>--SELECCIONAR--</option>
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TARJETA CREDITO">TARJETA CREDITO</option>
                                <option value="TARJETA DEBITO">TARJETA DEBITO</option>
                            </select>
                            @if ($forma_de_pago != '')
                                <p class="text-fuente text-[15px] mt-[20px]">Cantidad que abonara</p>
                                <input type="number" class="input-pdv w-full" placeholder="Cantidad que abonara"
                                    wire:model="cantidad_abonar" wire:input="calcular_cambio">
                            @endif

                            @if ($forma_de_pago == 'EFECTIVO')
                                <p class="text-fuente text-[15px] mt-[20px]">Pago Con...</p>
                                <input type="number" class="input-pdv w-full" wire:model="pago_con"
                                    wire:input="calcular_cambio" placeholder="Pago Con...">
                                <p class="text-fuente text-[40px] mt-[20px]" wire:model="cambio">Cambio $
                                    {{ number_format($this->cambio, 2) }}</p>
                            @endif

                            @if ($forma_de_pago == 'TARJETA DEBITO' || $forma_de_pago == 'TARJETA CREDITO')
                                <p class="text-fuente text-[15px] mt-[20px]">REFERENCIA</p>
                                <input type="number" class="input-pdv w-full" wire:model="referencia"
                                    placeholder="REFERENCIA">
                            @endif
                            <button class="btn-primary w-full mt-[20px]" wire:click="advertencia_ticket">
                                Abonar</button>
                        </div>


                        <!--IMPORTES-->

                        <div class="">
                            <p class="text-fuente text-[25px] ">IMPORTES Y VENCIMINETOS</p>
                            <div>
                                @if ($total_pagar > 0)
                                    <p class="text-fuente text-[20px] mt-[20px]">Monto Restante: $
                                        {{ number_format($total_pagar, 2) }}</p>
                                @endif
                            </div>
                            <!-- Tabla de datos -->
                            <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">

                                <table class="w-full text-sm text-left text-gray-400 ">
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
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($importes as $importe)
                                            <tr class=" border-b   bg-gray-900  dark:border-gray-700  transition-all">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente">
                                                    {{ $importe->numero }}
                                                </th>
                                                <td class="px-6 py-4 dark:text-fuente">
                                                    $ {{ number_format($importe->monto ,2) }}
                                                </td>
                                                <td class="px-6 py-4 dark:text-fuente">
                                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->format('d') }}
                                                    de
                                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->monthName }}
                                                    del
                                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->vencimiento)->format('Y') }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 dark:text-fuente @if ($importe->monto == 0) bg-[#013809]  @else bg-gray-900 @endif">
                                                    @if ($importe->monto == 0)
                                                        <p>PAGADO</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="px-[10px] py-[10px] bg-gray-700">
                                    {{ $importes->links() }}
                                </div>

                            </div>



                            <!--FIN IMPORTES-->
                        @else
                            <div class="flex justify-center items-center bg-green-700 w-full rounded-md">
                                <p class="text-fuente text-[25px] ">SIN IMPORTES RESTANTES</p>
                            </div>
                @endif


            @endif
        </div>

        <!--TICKETS-->
        @if ($tickets != null)

            @if (count($tickets) > 0)
                <div class="">
                    <p class="text-fuente text-[25px] ">TICKETS</p>
                    <!-- Tabla de datos -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px] max-h-[800px] ">

                        <table class="w-full text-sm text-left text-gray-400">
                            <thead class="text-xs text-fuente uppercase bg-gray-700 sticky top-0">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        NUMERO TICKET
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        Abono
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                        fecha
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-fuente text-[13px]">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700  transition-all">
                                        <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente">
                                        # {{ $ticket->id }}
                                    </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-fuente">
                                            $ {{ number_format($ticket->cantidad_abonar, 2) }}
                                        </th>
                                        <td class="px-6 py-4 dark:text-fuente">
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('d') }}
                                            de
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->monthName }}
                                            del
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('Y') }}
                                        </td>
                                        <td class="px-6 py-4 dark:text-fuente">
                                            <button class="btn-primary w-full h-[35px]" wire:click="descargar_ticket({{ $ticket->id }})">REGENERAR TICKET</button>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--FIN TICKETS-->
                @else
                    <div class="flex justify-center items-center bg-amber-600 w-full rounded-md mb-[20px]">
                        <p class="text-fuente text-[25px] ">SIN TICKETS</p>
                    </div>
            @endif
        @endif
    </div>

    <!--RESUMEN-->
    <div class="col-span-1 mb-[40px]">
        <div
            class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde md:mt-[0px] mt-[30px]  relative">
            <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px]">
                <p class="text-fuente text-[25px] mb-[20px]">RESUMEN</p>
                <div class="w-full">
                    <p class="text-fuente">Comprador</p>
                    <input wire:model = "compradorMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Comprador">
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
                        <p class="text-fuente  mb-[100px]">$ @if ($venta->monto_mes != null)
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



                </div>

            </div>
            <div class="bottom-0 w-full px-[40px] py-[20px]">
                <button class="btn-primary w-full mt-[20px]" wire:click="regenerar_contrato"> Regenerar
                    Contrato</button>
            </div>

        </div>

    </div>

    <div class="mt-[20px] w-full rounded-md bg-negro-menu h-full mb-[80px] px-[40px] py-[40px]">
        <form wire:submit.prevent="guardar_contrato">
            @csrf
            <p class="text-fuente text-[25px]">Subir Contrato</p>
            <input type="file" wire:model="contrato" class="text-fuente mt-[20px] text-[20px]">
            <br>
            <button class="btn-primary mt-[20px]" type="submit">Subir</button>
        </form>
            <div class="mt-[20px] h-[1200px]" id="iframe_container">
                @if ($venta->contrato)
                <iframe data-baseurl="/ver_contrato" src="{{ route('ver_contrato', ['venta_id' => $venta->id]) }}"
                    id="iframe" width="100%" height="100%" frameborder="0"></iframe>
                @endif
            </div>
    </div>

</div>
</div>
<!--FIN-->
</div>

<script>
    window.addEventListener('advertencia_ticket', event => {
        Swal.fire({
            title: "¿Abonar?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Aceptar"
        }).then((result) => {
            if (result.isConfirmed) {
                @this.dispatch('crear_ticket')
            }
        });
    });

    window.addEventListener('ticket_creado', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Abono completado',
            showConfirmButton: false,
            timer: 1500,
        })
    });

    window.addEventListener('contrato_subido', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Contrato Almacenado',
            showConfirmButton: false,
            timer: 1500,
        })

        const venta_id = event.detail[0].venta_id;

        var iframe = document.getElementById('iframe');
        if (iframe) {
            var baseUrl = iframe.dataset.baseurl;
            iframe.src = `${baseUrl}/${venta_id}`;
        } else {
            iframe = document.createElement('iframe');
            iframe.id = 'iframe';
            iframe.width = '100%';
            iframe.height = '50%';
            iframe.frameBorder = '0';
            iframe.src = `/ver_contrato/${venta_id}`;

            var container = document.getElementById('iframe_container');
            if (container) {
                container.appendChild(iframe);
                @this.dispatch('render');
            }
        }
    });
</script>
