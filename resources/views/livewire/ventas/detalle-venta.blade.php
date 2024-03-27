<div class="mx-2 md:mx-[60px] mt-[20px]">
    <div>
        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">Contrato No. {{ $venta->no_contrato }}</p>
            </div>
        </div>

        <!--CONTENEDOR PRINCIPAL-->
        <div class="flex flex-col w-full my-7 gap-x-7 gap-y-7">
            @if ($importes != null)
                @if (count($importes) > 0)
                    <div class="mt-[30px] md:mt-[0px]">
                        <!--ABONAR-->
                        <div
                            class="bg-gray-100 py-10 rounded-md mb-[50px] px-[10px] md:px-[50px]  text-fuente-secundario">
                            @if ($error == true)
                                <div
                                    class="h-[20px] w-full bg-red-500 text-fuente py-4 px-4 flex justify-center items-center rounded-lg">
                                    <div>
                                        <p>Llena todos los campos</p>
                                    </div>
                                </div>
                            @endif
                            <p class=" text-[25px]">Abonar</p>
                            <p class=" text-[15px] mt-[20px]">Forma de pago</p>
                            <select name="metodo_pago" id="metodo_pago" class="input-pdv mt-[10px] w-full"
                                wire:model="forma_de_pago" wire:change="cambio_forma_de_pago">
                                <option value="" selected>--SELECCIONAR--</option>
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TARJETA CREDITO">TARJETA CREDITO</option>
                                <option value="TARJETA DEBITO">TARJETA DEBITO</option>
                            </select>
                            @if ($forma_de_pago != '')
                                <p class=" text-[15px] mt-[20px]">Cantidad que abonara</p>
                                <input type="number" class="input-pdv w-full" placeholder="Cantidad que abonara"
                                    wire:model="cantidad_abonar" wire:input="calcular_cambio">
                            @endif

                            @if ($forma_de_pago == 'EFECTIVO')
                                <p class=" text-[15px] mt-[20px]">Pago Con...</p>
                                <input type="number" class="input-pdv w-full" wire:model="pago_con"
                                    wire:input="calcular_cambio" placeholder="Pago Con...">
                                <p class=" text-[40px] mt-[20px]" wire:model="cambio">Cambio $
                                    {{ number_format($this->cambio, 2) }}</p>
                            @endif

                            @if ($forma_de_pago == 'TARJETA DEBITO' || $forma_de_pago == 'TARJETA CREDITO')
                                <p class=" text-[15px] mt-[20px]">REFERENCIA</p>
                                <input type="number" class="input-pdv w-full" wire:model="referencia"
                                    placeholder="REFERENCIA">
                            @endif
                            <button class="btn-primary w-full mt-[20px]" wire:click="advertencia_ticket">
                                Abonar</button>
                        </div>


                        <!--IMPORTES-->

                        <div class="">
                            <p class="text-fuente-secundario text-[25px] ">IMPORTES Y VENCIMINETOS</p>
                            <div>

                                <p class="text-fuente-secundario text-[20px] mt-[20px]">Monto Restante: $
                                    {{ number_format($total_pagar, 2) }}</p>

                            </div>
                            <!-- Tabla de datos -->
                            <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px]">

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
                                                Fecha de liquidacion
                                            </th>
                                            <th>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($importes as $importe)
                                            <tr>
                                                <th>

                                                    @if ($importe->numero == 0)
                                                        Anticipo
                                                    @else
                                                        {{ $importe->numero }}
                                                    @endif
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
                                                    @if ($importe->monto == 0)
                                                        <p>
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->fecha_liquidacion)->format('d') }}
                                                            de
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->fecha_liquidacion)->monthName }}
                                                            del
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $importe->fecha_liquidacion)->format('Y') }}
                                                        </p>
                                                    @endif
                                                    @if ($importe->numero == 0)
                                                        <p>
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->format('d') }}
                                                            de
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->monthName }}
                                                            del
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->format('Y') }}
                                                        </p>
                                                    @endif
                                                </td>
                                                <td
                                                    class="text-fuente @if ($importe->monto == 0 || $importe->numero == 0) bg-[#013809]  @elseif($importe->vencimiento < Carbon\Carbon::now()->format('Y-m-d') && $importe->monto != 0) bg-[#5F1414] @else bg-white @endif">
                                                    @if ($importe->monto == 0)
                                                        <p>PAGADO</p>
                                                    @endif
                                                    @if ($importe->numero == 0)
                                                        <p>PAGADO</p>
                                                    @endif

                                                    @if ($importe->vencimiento < Carbon\Carbon::now()->format('Y-m-d') && $importe->monto != 0 && $importe->numero != 0)
                                                        <p>EXPIRADO</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="links">
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
                    <p class="text-fuente-secundario text-[25px] ">TICKETS</p>
                    <!-- Tabla de datos -->
                    <div
                        class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[30px] no-scrollbar mb-[80px] max-h-[800px] ">

                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        NUMERO TICKET
                                    </th>
                                    <th>
                                        Abono
                                    </th>
                                    <th>
                                        fecha
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>
                                            # {{ $ticket->id }}
                                        </td>
                                        <td>
                                            $ {{ number_format($ticket->cantidad_abonar, 2) }}
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('d') }}
                                            de
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->monthName }}
                                            del
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('Y') }}
                                        </td>
                                        <td>
                                            <button class="btn-primary w-full h-[35px]"
                                                wire:click="descargar_ticket({{ $ticket->id }})">GENERAR
                                                TICKET</button>
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
            class=" w-full h-full py-4 bg-gray-100 shadow-lg rounded-md overflow-x-hidden border-2  md:mt-[0px] mt-[30px]  relative">
            <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px]">
                <p class="text-fuente-secundario text-[25px] mb-[20px]">RESUMEN</p>
                <div class="w-full text-fuente-secundario">
                    <p class="">Comprador</p>
                    <input wire:model = "compradorMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Comprador">
                    <p class="">Aval</p>
                    <input wire:model = "avalMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Aval">
                    <p class="">Vendedor</p>
                    <input wire:model = "vendedorMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Vendedor">
                    <p class="">Zona</p>
                    <input wire:model = "zonaMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Zona">
                    <p class="">Clave Catastral</p>
                    <input wire:model = "loteMostrar" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="lote">
                    <p class="">Metodo de pago</p>
                    <input wire:model = "metodo_pago" type="text" class="input-pdv mb-[20px] w-full" disabled
                        placeholder="Metodo de pago">
                    <p class="">Costo del Lote</p>
                    <p class=" mb-[20px]">$ @if ($venta->costo_lote != null)
                            {{ number_format($venta->costo_lote, 2) }}
                        @endif
                    </p>
                    @if ($venta->metodo_pago == 'A MESES')
                        <p class="">Enganche</p>
                        <p class="  mb-[20px]">$ @if ($venta->enganche != null)
                                {{ number_format($venta->enganche, 2) }}
                            @endif
                        </p>
                        <p class="">Meses a pagar</p>
                        <p class=" mb-[20px]">{{ $venta->meses_pagar }}</p>

                        <p class="">Monto por mes</p>
                        <p class="  mb-[100px]">$ @if ($venta->monto_mes != null)
                                {{ number_format($venta->monto_mes, 2) }}
                            @endif
                        </p>
                    @endif
                    @if ($venta->metodo_pago == 'CONTADO')
                        <p class="">Forma de pago</p>
                        <p class=" mb-[20px]">{{ $venta->forma_de_pago }}</p>
                        @if ($venta->forma_de_pago == 'EFECTIVO')
                            <p class="">Pago con ...</p>
                            <p class="  mb-[20px]">$ @if ($venta->pago_con != null)
                                    {{ number_format($venta->pago_con, 2) }}
                                @endif
                            </p>
                            <p class="">Cambio</p>
                            <p class="  mb-[20px]">$ @if ($venta->cambio != 0)
                                    {{ number_format($venta->cambio, 2) }}@else{{ number_format(0, 2) }}
                                @endif
                            </p>

                        @endif
                        @if ($venta->forma_de_pago == 'TARJETA CREDITO')
                            <p class="">Referencia</p>
                            <p class="">{{ $venta->referencia }}</p>
                        @endif
                        @if ($venta->forma_de_pago == 'TARJETA DEBITO')
                            <p class="">Referencia</p>
                            <p class="">{{ $venta->referencia }}</p>
                        @endif
                    @endif



                </div>

            </div>
            <div class="bottom-0 w-full px-[40px] py-[20px] flex flex-wrap gap-4">

                <div wire:click = "regenerar_contrato"
                    class="flex btn-primary-red gap-x-2 items-center justify-center  mb-[10px] cursor-pointer w-[200px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <p class=" text-[17px]">PDF Contrato </p>
                </div>

                <div wire:click = "generar_pagares"
                    class="flex btn-primary-red gap-x-2 items-center justify-center  mb-[10px] cursor-pointer w-[200px] hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                    <p class=" text-[17px]">PDF Pagares</p>
                </div>

                <div wire:click = "generar_anticipo"
                class="flex btn-primary-red gap-x-2 items-center justify-center  mb-[10px] cursor-pointer w-[200px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <p class=" text-[17px]">PDF Anticipo</p>
            </div>

            </div>

        </div>

    </div>

    <div class="mt-[20px] w-full rounded-md bg-gray-100 mb-[80px] px-[40px] py-[40px]">
        <form wire:submit.prevent="guardar_contrato">
            @csrf
            <p class="text-fuente-secundario text-[25px]">Subir Contrato</p>
            <input type="file" wire:model="contrato" class="text-fuente-secundario mt-[20px] text-[20px] ">
            <br>
            <button class="btn-primary mt-[20px]" type="submit">Subir</button>
        </form>
        <div class="mt-[20px] @if ($venta->contrato) h-[1200px] @endif" id="iframe_container">
            @if ($venta->contrato)
                <iframe data-baseurl="/ver_contrato" src="{{ route('ver_contrato', ['venta_id' => $venta->id]) }}"
                    id="iframe" width="100%" height="100%" frameborder="0"></iframe>
            @endif
        </div>
    </div>

    <!--ESCRITURACION-->
    <div class="col-span-1 mb-[100px]">
        <div
            class=" w-full h-full py-4 bg-gray-100 shadow-lg rounded-md overflow-x-hidden border-2  md:mt-[0px] mt-[30px]  relative">
            <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px]">
                <p class="text-fuente-secundario text-[25px] mb-[20px]">ESCRITURACION</p>

                <div class="w-full text-fuente-secundario">

                    <p class="">Fecha</p>
                    <input wire:model = "fecha_escrituracion" type="date"
                        class="input-pdv mb-[20px] w-full"@if (!$editar_escrituracion) disabled @endif
                        placeholder="Fecha">

                    <p class="">Numero de escrituracion</p>
                    <input wire:model = "numero_escrituracion" type="text" class="input-pdv mb-[20px] w-full"
                        @if (!$editar_escrituracion) disabled @endif placeholder="Numero de escrituracion">

                    <p class="">Notaria</p>
                    <input wire:model = "notaria" type="text" class="input-pdv mb-[20px] w-full"
                        @if (!$editar_escrituracion) disabled @endif placeholder="Notaria">

                </div>
            </div>
            <div class="bottom-0 w-full px-[40px] py-[20px]">
                <button class="btn-primary w-full mt-[20px] @if ($editar_escrituracion) bg-green-700 @endif"
                    wire:click="toggle_editar_escrituracion">
                    @if ($editar_escrituracion)
                        Aceptar
                    @else
                        Editar
                    @endif
                </button>
            </div>
            <div class="px-[40px] py-[20px]">

                <form wire:submit.prevent="guardar_escritura">
                    @csrf
                    <p class="text-fuente-secundario text-[25px]">Subir Escrituracion</p>
                    <input type="file" wire:model="escritura_pdf"
                        class="text-fuente-secundario mt-[20px] text-[20px] ">
                    <br>
                    <button class="btn-primary mt-[20px]" type="submit">Subir</button>
                </form>
                <div class="mt-[20px] @if ($venta->escritura_pdf) h-[1200px] @endif"
                    id="iframe_container_escritura">
                    @if ($venta->escritura_pdf)
                        <iframe data-baseurl="/ver_escritura"
                            src="{{ route('ver_escritura', ['venta_id' => $venta->id]) }}" id="iframe_escritura"
                            width="100%" height="100%" frameborder="0"></iframe>
                    @endif
                </div>
            </div>

        </div>

    </div>

</div>
</div>
<!--FIN-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
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
        });

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

    window.addEventListener('escritura_subida', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Escritura Almacenada',
            showConfirmButton: false,
            timer: 1500,
        });

        const venta_id = event.detail[0].venta_id;

        var iframe = document.getElementById('iframe_escritura');
        if (iframe) {
            var baseUrl = iframe.dataset.baseurl;
            iframe.src = `${baseUrl}/${venta_id}`;
        } else {
            iframe = document.createElement('iframe_escritura');
            iframe.id = 'iframe';
            iframe.width = '100%';
            iframe.height = '50%';
            iframe.frameBorder = '0';
            iframe.src = `/ver_escritura/${venta_id}`;

            var container = document.getElementById('iframe_container_escritura');
            if (container) {
                container.appendChild(iframe);
                @this.dispatch('render');
            }
        }
    });


    window.addEventListener('escritura_success', event => {
        Swal.fire({
            position: 'center-middle',
            icon: 'success',
            title: 'Cambios Aplicados',
            showConfirmButton: false,
            timer: 1500,
        })
    });

/*
    window.addEventListener('generar_ticket_abono', event => {
        $.ajax({
            url: `/ventas/nueva/generar_contrato/45`,
            method: 'GET',
            xhrFields: {
                responseType: 'blob' // Especifica que la respuesta es un blob (archivo binario)
            },
            success: function(response) {
                var blob = new Blob([response], { type: 'application/pdf' });
                saveAs(blob, 'nombre_del_archivo.pdf');
            },
            error: function(xhr, status, error) {
                // Esta función se ejecutará si la petición falla
                console.error(xhr, status, error);
            }
        })
    })
*/


</script>

