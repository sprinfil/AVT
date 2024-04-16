<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #000;
        padding: 3px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .no-border {
        border: none;
    }
    .firmas {
        padding-top: 20px;
    }
    .firmas td {
        padding: 5px;
        border: none;
        border-bottom: 1px solid #000;
    }
    .tabla-general {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px; /* Espacio entre tablas de zona */
    }
    .tabla-general th, 
    .tabla-general td {
        border: 1px solid #000;
        padding: 3px;
    }
    .tabla-total {
        width: 100%;
        border-collapse: collapse;
        border: none;
    }
    .tabla-total th, 
    .tabla-total td {
        border: none;
        padding: 3px;
        text-align: left;
    }

    .tabla-firmas {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Espacio antes de la sección de firmas */
    }
    .tabla-firmas td, .tabla-firmas th {
        border: 1px solid #000;
        padding: 10px;
        vertical-align: top; /* Alinea el texto arriba en la celda */
    }
    .fila-firmas {
        height: 50px; /* Altura fija para la fila de firmas */
    }
    .fila-observaciones {
        height: 100px; /* Altura fija para la fila de observaciones */
    }
    .sin-borde {
        border: none;
    }
    .ancho-observaciones {
        width: 70%; /* Ancho para la columna de observaciones */
    }
    .ancho-firma {
        width: 30%; /* Ancho para la columna de firma */
    }
</style>
<body>
    @php
        use Carbon\Carbon;

        $fechaHoy = isset($fecha) ? Carbon::parse($fecha)->startOfDay() : now()->startOfDay();
    @endphp
    @if($zona != null)
        <table style="width:100%; border-collapse: collapse; border:none;">
            <tr>
                <td style="width:50%; border:none;">
                    <img src="{{ $url_imagen }}" alt="Imagen de la Zona" style="max-width:100%;">
                </td>
                <td style="width:50%; text-align:right; border:none;">
                    Fecha: {{ $fechaHoy->format('d, M Y') }}
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <table>
            <thead>
                <tr>
                    <th><b>No.</b></th>
                    <th><b>Cont.</b></th>
                    <th><b>Comprador:</b></th>
                    <th><b>C.C:</b></th>
                    <th><b>Lote:</b></th>
                    <th><b>Mza:</b></th>
                    <th><b>Pagos:</b></th>
                    <th><b>Importe:</b></th>
                </tr>
            </thead>    
            <tbody>
                @php $total = 0; @endphp

                @foreach($zona->contratos as $contrato)
                    @php
                        $venta = $contrato;
                        $lote = $venta ? $venta->Lote : null;
                        $totalPagos = $venta->Importes->count(); // Total de pagos a realizar

                        // Revisa si hay un anticipo para esta venta en la fecha seleccionada.
                        $anticipo = $venta->Importes->firstWhere(function ($importe) use ($fechaHoy) {
                            return Carbon::parse($importe->vencimiento)->startOfDay()->eq($fechaHoy) && $importe->numero == 0;
                        });
                        
                        $ticketsDelDia = $venta->Tickets->filter(function ($ticket) use ($fechaHoy) {
                            return Carbon::parse($ticket->fecha)->startOfDay()->eq($fechaHoy);
                        });
            
                        if ($ticketsDelDia->isEmpty() && !$anticipo) {
                            continue; // Si no hay tickets para la fecha seleccionada, no incluir esta venta.
                        }
            
                        $ultimoPagoRealizado = $ticketsDelDia->sortByDesc('fecha')->first();
                        $numeroUltimoPago = $ultimoPagoRealizado ? $ultimoPagoRealizado->numeros_pagados : null; // Puede ser null si no hay pagos.
                        
                        $totalAbonadoHoy = 0;
                        
                        if ($anticipo) {
                            $textoUltimoPago = 'Anticipo';
                            $totalAbonadoHoy = $anticipo->monto; // Asume que 'monto' es el campo para el importe del anticipo.
                        } else {
                            $textoUltimoPago = $numeroUltimoPago ?? 'Sin pagos';
                            $totalAbonadoHoy = $ticketsDelDia->sum('cantidad_abonar');
                        }

                        $total += $totalAbonadoHoy;
                    @endphp
                    @if($venta && $lote)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $venta->no_contrato }}</td>
                            <td>{{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</td>
                            <td>{{ $lote->catastral }}</td>
                            <td>{{ $lote->lote }}</td>
                            <td>{{ $lote->manzana }}</td>
                            <td>{{ $textoUltimoPago }} | {{ $totalPagos }}</td>
                            <td>${{ number_format($totalAbonadoHoy, 2, '.', ',') }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" style="text-align: right; border-top: 1px solid #000;"><b>Total:</b></td>
                    <td style="text-align: right; border-top: 1px solid #000;"><b>${{ number_format($total, 2, '.', ',') }}</b></td>
                </tr>
            </tfoot>
        </table>

        <br>
        <br>
        <br>
        
        <table style="width:100%; border:none;"> <!-- Ajuste para espacio entre filas -->
            <tr>
                <td style="width: 20%; border: 1px solid #000; padding: 10px 5px;">Vendedor:</td> <!-- Ajuste de ancho y padding -->
                <td style="width: 30%; border: 1px solid #000; padding: 10px 5px;">{{ $zona->dueno->nombre . ' ' . $zona->dueno->apellido_1 . ' ' . $zona->dueno->apellido_2 }}</td>
                <td style="width: 20%; border: 1px solid #000; padding: 10px 5px;">Nota:</td>
                <td style="width: 30%; border: 1px solid #000; padding: 10px 5px;">_____________________________</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 10px 5px;">Fecha:</td>
                <td style="border: 1px solid #000; padding: 10px 5px;" colspan="3">{{ $fechaHoy->format('d, M Y') }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 10px 5px;">Fecha de entrega:</td>
                <td style="border: 1px solid #000; padding: 10px 5px;" colspan="3">_____________________________</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 10px 5px;">Responsable:</td>
                <td style="border: 1px solid #000; padding: 10px 5px;" colspan="3">_____________________________</td>
            </tr>
        </table>
    @else
        <table class="tabla-total">
            <tr>
                <td><h2>Bitácora de Pagos</h2></td>
                <td style="text-align:right;">Fecha: {{ $fechaHoy->format('d, M Y') }}</td>
            </tr>
        </table>

        <br>
        <!-- Inicializar variable para el total general -->
        @php $totalGeneral = 0; @endphp
        
        @foreach ($zonas as $zona)
            <table class="tabla-total">
                <tr>
                    <th colspan="5">{{ $zona->dueno->nombreCompleto() }} - {{ $zona->nombre }}</th>
                </tr>
            </table>
            <table class="tabla-general">
                <thead>
                    <tr>
                        <th><b>No.</b></th>
                        <th><b>Cont.</b></th>
                        <th><b>Cliente:</b></th>
                        <th><b>C.C:</b></th>
                        <th><b>Pagos:</b></th>
                        <th><b>Importe:</b></th>
                    </tr>
                </thead>  
                <tbody>
                    @php $subtotalZona = 0; @endphp
                        @foreach($zona->contratos as $contrato)
                            @php
                                $venta = $contrato;
                                $lote = $venta ? $venta->Lote : null;
                                $totalPagos = $venta->Importes->count(); // Total de pagos a realizar

                                // Revisa si hay un anticipo para esta venta en la fecha seleccionada.
                                $anticipo = $venta->Importes->firstWhere(function ($importe) use ($fechaHoy) {
                                    return Carbon::parse($importe->vencimiento)->startOfDay()->eq($fechaHoy) && $importe->numero == 0;
                                });
                                
                                $ticketsDelDia = $venta->Tickets->filter(function ($ticket) use ($fechaHoy) {
                                    return Carbon::parse($ticket->fecha)->startOfDay()->eq($fechaHoy);
                                });
                    
                                if ($ticketsDelDia->isEmpty() && !$anticipo) {
                                    continue; // Si no hay tickets para la fecha seleccionada, no incluir esta venta.
                                }
                    
                                $ultimoPagoRealizado = $ticketsDelDia->sortByDesc('fecha')->first();
                                $numeroUltimoPago = $ultimoPagoRealizado ? $ultimoPagoRealizado->numeros_pagados : null; // Puede ser null si no hay pagos.
                    
                                if ($anticipo) {
                                    $textoUltimoPago = 'Anticipo';
                                    $totalAbonadoHoy = $anticipo->monto; // Asume que 'monto' es el campo para el importe del anticipo.
                                } else {
                                    $textoUltimoPago = $numeroUltimoPago ?? 'Sin pagos';
                                    $totalAbonadoHoy = $ticketsDelDia->sum('cantidad_abonar');
                                }

                                $subtotalZona += $totalAbonadoHoy;
                            @endphp
                            @if($venta && $lote)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $venta->no_contrato }}</td>
                                    <td>{{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</td>
                                    <td>{{ $lote->catastral }}</td>
                                    <td>{{ $textoUltimoPago }} | {{ $totalPagos }}</td>
                                    <td>${{ number_format($totalAbonadoHoy, 2, '.', ',') }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: right; border-top: 1px solid #000;"><b>Subtotal:</b></td>
                            <td style="text-align: right; border-top: 1px solid #000;"><b>${{ number_format($subtotalZona, 2, '.', ',') }}</b></td>
                            @php
                                $totalGeneral += $subtotalZona;
                            @endphp
                        </tr>
                    </tfoot>
            </table>
        @endforeach
        <table class="tabla-total">
            <tr>
                <th style="text-align: right;">Total General:</th>
                <th><b>${{ number_format($totalGeneral, 2, '.', ',') }}</b></th>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <table class="tabla-firmas">
            <tr class="fila-firmas">
                <td>Responsable:</td>
                <td class="ancho-firma" style="border-bottom: 1px solid #000;"> <!-- Para la línea de firma -->
                    &nbsp; <!-- Espacio no rompible para mantener la altura de la fila -->
                </td>
            </tr>
            <tr class="fila-observaciones">
                <td>Observaciones:</td>
                <td class="ancho-observaciones" style="border-bottom: 1px solid #000;">&nbsp;</td>
            </tr>
        </table>
    @endif  
</body>
