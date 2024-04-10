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
    @if($zona != null)
        <table style="width:100%; border-collapse: collapse; border:none;">
            <tr>
                <td style="width:50%; border:none;">
                    <img src="{{ $url_imagen }}" alt="Imagen de la Zona" style="max-width:100%;">
                </td>
                <td style="width:50%; text-align:right; border:none;">
                    Fecha: {{ now()->format('d, M Y') }}
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
                @foreach($zona->contratos as $contrato)
                    @php
                        $venta = $contrato;
                        $lote = $venta ? $venta->Lote : null;
                        $pagosRealizados = $venta ? $venta->Importes->where('monto', 0)->count() : 0;
                        $importePendiente = $venta ? $venta->Importes->where('monto', '>', 0)->sum('monto') : 0;
                        $importeTotalPagado = $lote ? floatval($lote->precio) - $importePendiente : 0;
                    @endphp
                    @if($venta && $lote)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $venta->no_contrato }}</td>
                            <td>{{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</td>
                            <td>{{ $lote->catastral }}</td>
                            <td>{{ $lote->lote }}</td>
                            <td>{{ $lote->manzana }}</td>
                            <td>{{ $pagosRealizados }} | {{ count($venta->Importes) }}</td>
                            <td>${{ number_format($importeTotalPagado, 2, '.', ',') }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" style="text-align: right; border-top: 1px solid #000;"><b>Total:</b></td>
                    <td style="text-align: right; border-top: 1px solid #000;">
                        <b>${{ number_format($zona->contratos->sum(function($contrato) {
                            $importePendiente = $contrato->Importes->where('monto', '>', 0)->sum('monto');
                            $importeTotalPagado = floatval($contrato->Lote->precio ?? 0) - $importePendiente;
                            return $importeTotalPagado;
                        }), 2, '.', ',') }}</b>
                    </td>
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
                <td style="border: 1px solid #000; padding: 10px 5px;" colspan="3">{{ now()->format('d, M Y') }}</td>
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
                <td style="text-align:right;">Fecha: {{ now()->format('d, M Y') }}</td>
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
                @foreach($zona->contratos as $contrato)
                    <tbody>
                            @php
                                $venta = $contrato;
                                $lote = $venta ? $venta->Lote : null;
                                $pagosRealizados = $venta ? $venta->Importes->where('monto', 0)->count() : 0;
                                $importePendiente = $venta ? $venta->Importes->where('monto', '>', 0)->sum('monto') : 0;
                                $importeTotalPagado = $lote ? floatval($lote->precio) - $importePendiente : 0;
                            @endphp
                            @if($venta && $lote)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $venta->no_contrato }}</td>
                                    <td>{{ $venta->Comprador->nombre . ' ' . $venta->Comprador->apellido_1 . ' ' . $venta->Comprador->apellido_2 }}</td>
                                    <td>{{ $lote->catastral }}</td>
                                    <td>{{ $pagosRealizados }} | {{ count($venta->Importes) }}</td>
                                    <td>${{ number_format($importeTotalPagado, 2, '.', ',') }}</td>
                                </tr>
                            @endif
                    </tbody>
                    @php
                        $subtotal = $zona->contratos->sum(function ($contrato) {
                            $importePendiente = $contrato->Importes->where('monto', '>', 0)->sum('monto');
                            $importeTotalPagado = $contrato->Lote ? ($contrato->Lote->precio - $importePendiente) : 0;
                            return $importeTotalPagado;
                        });
                        $totalGeneral += $subtotal; // Acumula los subtotales en el total general
                    @endphp
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: right; border-top: 1px solid #000;"><b>Subtotal:</b></td>
                            <td style="text-align: right; border-top: 1px solid #000;">
                                <b>${{ number_format($subtotal, 2, '.', ',') }}</b>
                            </td>
                        </tr>
                    </tfoot>
                @endforeach
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