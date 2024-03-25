<div>
    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="{{ route('ventas') }}" class="underline text-blue-500">VENTAS</a>
        /
        <a href="" class=" text-fuente">NUEVA VENTA</a>
    </div>

    <div class="mx-2 md:mx-[60px] mt-[20px] mb-[80px]">

        <!--Cabecera-->
        <div class=" w-full h-full bg-terciario shadow-lg rounded-md overflow-x-hidden border-color-borde">

            <div class="mx-[10px] md:mx-[50px]  justify-between mt-[20px]">
                <p class="text-fuente text-[40px] mb-[20px]">NUEVA VENTA</p>
            </div>
        </div>

        <!--CONTENEDOR PRINCIPAL-->
        <div class="grid grid-cols-1 md:grid-cols-3 w-full  my-7 gap-x-7">

            <!--CONTENEDOR PARA IR SELECCIONANDO-->
            <div class="col-span-2 gap-x-10 ">

                <div class="">
                    <p class="text-fuente-secundario text-[25px]">Comprador</p>

                    <!--Input de busqueda-->
                    <div class="relative mt-[10px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar persona..."
                            wire:model="filtroComprador" wire:input="actualizarFiltroComprador">
                    </div>

                    <!--SELECT COMPRADOR-->
                    <select name="comprador" id="comprador" class="input-pdv mt-[10px] w-full"
                        wire:change = "SeleccionarComprador" wire:model = "compradorLista">
                        <option value="" selected>--SELECCIONAR--</option>
                        @foreach ($compradores as $comprador)
                            <option value="{{ $comprador->id }}">{{ $comprador->nombreCompleto() }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Aval</p>

                    <!--Input de busqueda-->
                    <div class="relative mt-[10px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar persona..."
                            wire:model="filtroAval" wire:input="actualizarFiltroAval">
                    </div>

                    <!--SELECT AVAL-->
                    <select name="aval" id="aval" class="input-pdv mt-[10px] w-full"
                        wire:change = "SeleccionarAval" wire:model = "avalLista">
                        <option value="" selected>--SELECCIONAR--</option>
                        @foreach ($avales as $aval)
                            <option value="{{ $aval->id }}">{{ $aval->nombreCompleto() }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Zona</p>

                    <!--Input de busqueda-->
                    <div class="relative mt-[10px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" class="input-pdv pl-10 w-full" placeholder="Buscar Zona..."
                            wire:model="filtroZona" wire:input="actualizarFiltroZona">
                    </div>

                    <!--SELECT ZONA-->
                    <select name="zona" id="ZONA" class="input-pdv mt-[10px] w-full"
                        wire:change = "SeleccionarZona" wire:model = "zonaLista">
                        <option value="" selected>--SELECCIONAR--</option>
                        @foreach ($zonas as $zona)
                            <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Clave Catastral</p>
                    <!--Input de busqueda-->
                    <div class="relative mt-[10px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" class="input-pdv pl-10 w-full mascara-catastral" placeholder="Buscar Lote (C.C.)"
                            wire:model="filtroLote" wire:input="actualizarFiltroLote">
                    </div>
                    <!--SELECT LOTE-->
                    <select name="lote" id="lote" class="input-pdv mt-[10px] w-full"
                        wire:change = "SeleccionarLote" wire:model = "loteLista"
                        @if ($desactivarLotes) disabled @endif>
                        <option value="" selected>--SELECCIONAR--</option>
                        @foreach ($lotes as $lote)
                            <option value="{{ $lote->id }}">{{ $lote->lote }} .- {{ $lote->catastral }} </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Contrato</p>
                    <input type="text" class="input-pdv w-full" placeholder="Contrato" wire:model="no_contrato">
                </div>

                <div>
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Fecha de Contrato</p>
                    <input type="date" class="input-pdv w-full" placeholder="Contrato" wire:model="fecha_contrato">
                </div>

                <div class="mb-[80px] text-fuente-secundario">
                    <!--SELECT METODO PAGO-->
                    <p class="text-fuente-secundario text-[25px] mt-[30px]">Metodo de pago</p>
                    <select name="metodo_pago" id="metodo_pago" class="input-pdv mt-[10px] w-full"
                        wire:change = "SeleccionarMetodoPago" wire:model = "metodo_pago">
                        <option value="" selected>--SELECCIONAR--</option>
                        <option value="A MESES">A MESES</option>
                        <option value="CONTADO">CONTADO</option>
                    </select>
                    @if ($metodo_pago != '')
                        <div class="md:w-[50%] w-full mt-[10px] ">
                            <p class=" text-[15px] ">Costo del lote</p>
                            <input type="text" class="input-pdv w-full" placeholder="costo del lote"
                                id="costo_lote" wire:model="costo_lote" wire:input="calcular_monto_por_mes">
                        </div>
                    @endif
                    @if ($metodo_pago == 'A MESES')
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Enganche</p>
                            <input type="number" class="input-pdv w-full" placeholder="Enganche"
                                wire:model="enganche_meses" wire:input="calcular_monto_por_mes">
                        </div>
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Meses a pagar</p>
                            <input type="number" class="input-pdv w-full" placeholder="Meses a pagar"
                                wire:model="meses_pagar" wire:input="calcular_monto_por_mes">
                        </div>
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Monto por mes</p>
                            <input type="number" class="input-pdv w-full" placeholder="Monto por mes"
                                wire:model="monto_mes" wire:input="calcular_monto_por_mes" disabled>
                        </div>
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Fecha del primer Abono</p>
                            <input type="date" class="input-pdv w-full" wire:model = "fecha_primer_abono_mostrar" wire:change = "actualizarFechaPrimerAbono">
                        </div>
                    @endif

                    @if ($metodo_pago == 'CONTADO')
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class="text-[15px]">Forma de pago</p>
                            <select name="metodo_pago" id="metodo_pago" class="input-pdv mt-[10px] w-full"
                                wire:model="forma_de_pago" wire:change="cambio_forma_de_pago">
                                <option value="" selected>--SELECCIONAR--</option>
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TARJETA CREDITO">TARJETA CREDITO</option>
                                <option value="TARJETA DEBITO">TARJETA DEBITO</option>
                            </select>
                        </div>
                    @endif
                    @if ($forma_de_pago == 'EFECTIVO')
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Pago con ...</p>
                            <input type="number" class="input-pdv w-full" placeholder="Pago con ..."
                                wire:model="pago_con_efectivo" wire:input="calcular_cambio_efectivo">
                        </div>
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Cambio</p>
                            <input type="number" class="input-pdv w-full" placeholder="Cambio"
                                wire:model="cambio_efectivo" disabled>
                        </div>
                    @endif
                    @if ($forma_de_pago == 'TARJETA CREDITO')
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Referencia</p>
                            <input type="number" class="input-pdv w-full" placeholder="Referencia"
                                wire:model="referencia_credito" wire:input="calcular_cambio_efectivo">
                        </div>
                    @endif
                    @if ($forma_de_pago == 'TARJETA DEBITO')
                        <div class="md:w-[50%] w-full  mt-[10px]">
                            <p class=" text-[15px]">Referencia</p>
                            <input type="number" class="input-pdv w-full" placeholder="Referencia"
                                wire:model="referencia_debito" wire:input="calcular_cambio_efectivo">
                        </div>
                    @endif
                </div>
                <!--FIN-->
            </div>
            <!--RESUMEN-->
            <div class="col-span-1">
                <div
                    class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde md:mt-[0px] mt-[30px]">
                    <div class="mx-[10px] md:mx-[50px] justify-center items-center text-[18px]">
                        <p class="text-fuente text-[25px] mb-[20px]">RESUMEN</p>
                        <div class="w-full">
                            <p class="text-fuente">Comprador</p>
                            <input wire:model = "compradorMostrar" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Comprador">
                            <p class="text-fuente">Aval</p>
                            <input wire:model = "avalMostrar" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Aval">
                                <p class="text-fuente">Zona</p>
                                <input wire:model = "zonaMostrar" type="text" class="input-pdv mb-[20px] w-full"
                                    disabled placeholder="Zona">
                            <p class="text-fuente">Vendedor</p>
                            <input wire:model = "vendedorMostrar" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Vendedor">
                            <p class="text-fuente">Clave Catastral</p>
                            <input wire:model = "loteMostrar" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Clave Catastral">
                            <p class="text-fuente">Contrato</p>
                            <input wire:model = "no_contrato" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Contrato">
                            <p class="text-fuente">Metodo de pago</p>
                            <input wire:model = "metodo_pago" type="text" class="input-pdv mb-[20px] w-full"
                                disabled placeholder="Metodo de pago">
                            <p class="text-fuente">Costo del Lote</p>
                            <p class="text-fuente mb-[20px]">$ @if ($costo_lote != null)
                                    {{ number_format($costo_lote, 2) }}
                                @endif
                            </p>
                            @if ($metodo_pago == 'A MESES')
                                <p class="text-fuente">Enganche</p>
                                <p class="text-fuente  mb-[20px]">$ @if ($enganche_meses != null)
                                        {{ number_format($enganche_meses, 2) }}
                                    @endif
                                </p>
                                <div class="h-[60px]">
                                    <p class="text-fuente">Meses a pagar</p>
                                    <p class="text-fuente">{{ $meses_pagar }}</p>
                                </div>
      

                                <p class="text-fuente">Monto por mes</p>
                                <p class="text-fuente  mb-[20px]">$ @if ($monto_mes != null)
                                        {{ number_format($monto_mes, 2) }}
                                    @endif
                                </p>
                                <p class="text-fuente">Primer Abono</p>
                                <p class="text-fuente  mb-[20px]">{{ $fecha_primer_abono->format('d') }} de {{ $fecha_primer_abono->monthName}} del {{ $fecha_primer_abono->format('Y') }}</p>
                            @endif
                            @if ($metodo_pago == 'CONTADO')
                                <p class="text-fuente">Forma de pago</p>
                                <p class="text-fuente mb-[20px]">{{ $forma_de_pago }}</p>
                                @if ($forma_de_pago == 'EFECTIVO')
                                    <p class="text-fuente">Pago con ...</p>
                                    <p class="text-fuente  mb-[20px]">$ @if ($pago_con_efectivo != null)
                                            {{ number_format($pago_con_efectivo, 2) }}
                                        @endif
                                    </p>
                                    <p class="text-fuente">Cambio</p>
                                    <p class="text-fuente  mb-[20px]">$ @if ($cambio_efectivo != 0)
                                            {{ number_format($cambio_efectivo, 2) }}@else{{ number_format(0, 2) }}
                                        @endif
                                    </p>

                                @endif
                                @if ($forma_de_pago == 'TARJETA CREDITO')
                                    <p class="text-fuente">Referencia</p>
                                    <p class="text-fuente">{{ $referencia_credito }}</p>
                                @endif
                                @if ($forma_de_pago == 'TARJETA DEBITO')
                                    <p class="text-fuente">Referencia</p>
                                    <p class="text-fuente">{{ $referencia_debito }}</p>
                                @endif
                            @endif
                            <button class="btn-primary w-full mt-[20px]" wire:click="advertencia_venta">
                                Continuar</button>
                            @if ($this->error)
                                <div
                                    class="w-full h-[30px] bg-red-500 rounded-md flex items-center justify-center text-fuente py-[20px] mt-[20px]">
                                    <p>Rellena todos los campos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

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
            $('.mascara-catastral').mask('0000-0000-0000-0000-0000', {
            });
        });
    </script>
    <script>
        window.addEventListener('advertencia_venta', event => {
            Swal.fire({
                title: "¿Continuar con la venta?",
                text: 'Asegurate de que los campos esten correctos',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('crear_venta')
                }
            });
        });
    </script>
@endsection
