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

        <br><br><br>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Cont.</th>
                    <th>Comprador:</th>
                    <th>C.C:</th>
                    <th>Lote:</th>
                    <th>Mza:</th>
                    <th>Detalle Pago:</th>
                    <th>Importe:</th>
                </tr>
            </thead>    
            <tbody>
                @php $total = 0; $count = 1; @endphp
                @foreach($zona->contratos as $contrato)
                    @php
                        $venta = $contrato;
                        $lote = $venta ? $venta->Lote : null;

                        $ticketsDelDia = $venta->Tickets->filter(function ($ticket) use ($fechaHoy) {
                            return Carbon::parse($ticket->fecha)->startOfDay()->eq($fechaHoy);
                        });

                        $anticipo = $venta->Importes->firstWhere(function ($importe) use ($fechaHoy) {
                            return Carbon::parse($importe->vencimiento)->startOfDay()->eq($fechaHoy) && $importe->numero == 0;
                        });

                        if ($anticipo) {
                            // Mostrar anticipo como un ticket
                            $total += $anticipo->monto;
                            echo '<tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$venta->no_contrato.'</td>
                                    <td>'.$venta->Comprador->nombre.' '.$venta->Comprador->apellido_1.' '.$venta->Comprador->apellido_2.'</td>
                                    <td>'.$lote->catastral.'</td>
                                    <td>'.$lote->lote.'</td>
                                    <td>'.$lote->manzana.'</td>
                                    <td>Anticipo</td>
                                    <td>$'.number_format($anticipo->monto, 2, '.', ',').'</td>
                                </tr>';
                        }

                        foreach ($ticketsDelDia as $ticket) {
                            $total += $ticket->cantidad_abonar;
                            echo '<tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$venta->no_contrato.'</td>
                                    <td>'.$venta->Comprador->nombre.' '.$venta->Comprador->apellido_1.' '.$venta->Comprador->apellido_2.'</td>
                                    <td>'.$lote->catastral.'</td>
                                    <td>'.$lote->lote.'</td>
                                    <td>'.$lote->manzana.'</td>
                                    <td>'.$ticket->numeros_pagados.'</td>
                                    <td>$'.number_format($ticket->cantidad_abonar, 2, '.', ',').'</td>
                                </tr>';
                        }
                    @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" style="text-align: right; border-top: 1px solid #000;"><b>Total:</b></td>
                    <td style="text-align: right; border-top: 1px solid #000;"><b>${{ number_format($total, 2, '.', ',') }}</b></td>
                </tr>
            </tfoot>
        </table>

        <br><br><br>

        <table class="tabla-firmas">
            <tr class="fila-firmas">
                <td>Responsable:</td>
                <td class="ancho-firma" style="border-bottom: 1px solid #000;">&nbsp;</td>
            </tr>
            <tr class="fila-observaciones">
                <td>Observaciones:</td>
                <td class="ancho-observaciones" style="border-bottom: 1px solid #000;">&nbsp;</td>
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
                    <th colspan="6">{{ $zona->nombre }}</th>
                </tr>
            </table>
            <table class="tabla-general">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Cont.</th>
                        <th>Comprador:</th>
                        <th>C.C:</th>
                        <th>Detalle Pago:</th>
                        <th>Importe:</th>
                    </tr>
                </thead>  
                <tbody>
                    @php $subtotalZona = 0; $count = 1; @endphp
                    @foreach($zona->contratos as $contrato)
                        @php
                            $venta = $contrato;
                            $lote = $venta ? $venta->Lote : null;

                            $ticketsDelDia = $venta->Tickets->filter(function ($ticket) use ($fechaHoy) {
                                return Carbon::parse($ticket->fecha)->startOfDay()->eq($fechaHoy);
                            });

                            $anticipo = $venta->Importes->firstWhere(function ($importe) use ($fechaHoy) {
                                return Carbon::parse($importe->vencimiento)->startOfDay()->eq($fechaHoy) && $importe->numero == 0;
                            });

                            if ($anticipo) {
                                // Mostrar anticipo como un ticket
                                $subtotalZona += $anticipo->monto;
                                echo '<tr>
                                        <td>'.$count++.'</td>
                                        <td>'.$venta->no_contrato.'</td>
                                        <td>'.$venta->Comprador->nombre.' '.$venta->Comprador->apellido_1.' '.$venta->Comprador->apellido_2.'</td>
                                        <td>'.$lote->catastral.'</td>
                                        <td>Anticipo</td>
                                        <td>$'.number_format($anticipo->monto, 2, '.', ',').'</td>
                                    </tr>';
                            }

                            foreach ($ticketsDelDia as $ticket) {
                                $subtotalZona += $ticket->cantidad_abonar;
                                echo '<tr>
                                        <td>'.$count++.'</td>
                                        <td>'.$venta->no_contrato.'</td>
                                        <td>'.$venta->Comprador->nombre.' '.$venta->Comprador->apellido_1.' '.$venta->Comprador->apellido_2.'</td>
                                        <td>'.$lote->catastral.'</td>
                                        <td>'.$ticket->numeros_pagados.'</td>
                                        <td>$'.number_format($ticket->cantidad_abonar, 2, '.', ',').'</td>
                                    </tr>';
                            }
                        @endphp
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

        <br><br><br>

        <table class="tabla-firmas">
            <tr class="fila-firmas">
                <td>Responsable:</td>
                <td class="ancho-firma" style="border-bottom: 1px solid #000;">&nbsp;</td>
            </tr>
            <tr class="fila-observaciones">
                <td>Observaciones:</td>
                <td class="ancho-observaciones" style="border-bottom: 1px solid #000;">&nbsp;</td>
            </tr>
        </table>
    @endif  
</body>
