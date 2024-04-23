<style>
     @page {
        size: 16in 9in;
    }
    body{
        background-image:  url('{{ $url_imagen }}');
        /*background-image:  url('{{ public_path() }}/storage/imagenes/girasoles.png');*/
        /*background-image:  url('{{ public_path() }}/imagenes_contratos/girasoles.png');*/
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;

    }
    *{
        font-family: sans-serif;
    }
    table{
        width: 100%;
        border: solid 1px;
        border-collapse: collapse;
      
    }
    th, td {
        border: solid 1px; 
        padding: 3px; 
        
    }
    td{
        font-size: 13px;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="10">INGRESOS "{{ strtoupper($pago->zona->nombre ) }}"</th>
            </tr>
            <tr>
                <th colspan="10">PERIODO {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_inicio)->format('d') }} AL {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_final)->format('d') }} DE {{ strtoupper(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_final)->monthName )}} DEL {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->periodo_final)->format('Y') }}</th>    
            </tr>   
            <tr>
                <th>#</th>
                <th>CONTRATO</th>
                <th>NOMBRE</th>
                <th>CLAVE CATASTRAL</th>
                <th colspan="2">NUMERO DE PAGO</th>
                <th>IMPORTE</th>
                <th>FECHA DE PAGO</th>
                <th colspan="2">OBSERVACION</th>
            </tr> 
        </thead>    
        <tbody>
            {{$consecutivo = 0}}
            @foreach($anticipos as $anticipo)
                <tr>
                    <td style="text-align: center;">
                        {{ $consecutivo = $consecutivo + 1 }}
                    </td>
                    <td style="text-align: center;">
                        {{ $anticipo->Venta->no_contrato }}
                    </td>
                    <td>
                        {{ $anticipo->Venta->Comprador->nombreCompleto() }}
                    </td>
                    <td style="text-align: center;">
                        {{ $anticipo->Venta->Lote->catastral }}
                    </td>
                    <td style="text-align: right;">
                        ANTICIPO
                    </td>
                    <td style="text-align: left;">
                        {{$anticipo->Venta->meses_pagar}}
                    </td>
                    <td style="text-align: left; align-items:center;">
                        <table style="border: none;">
                            <tr><td style="border: none;">$</td><td style="border: none; text-align:right;">{{ number_format( $anticipo->monto ,2)}}</td></tr>
                        </table>
                    </td>
                    <td style="text-align: center;">
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $anticipo->fecha_liquidacion)->format('d')}} /
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $anticipo->fecha_liquidacion)->format('m') }} /
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $anticipo->fecha_liquidacion)->format('Y') }}
                    </td>
                    <td colspan="2">
    
                    </td>
                </tr>
            @endforeach
            @foreach($pagos as $pago)
                <tr>
                    <td style="text-align: center;">
                        {{ $consecutivo = $consecutivo + 1 }}
                    </td>
                    <td style="text-align: center;">
                        {{ $pago->venta->no_contrato }}
                    </td>
                    <td>
                        {{ $pago->venta->Comprador->nombreCompleto() }}
                    </td>
                    <td style="text-align: center;">
                        {{ $pago->venta->Lote->catastral }}
                    </td>
                    <td style="text-align: right;">
                        {{ $pago->numeros_pagados }}
                    </td>
                    <td style="text-align: left;">
                        {{ $pago->venta->meses_pagar }}
                    </td>
                    <td style="text-align: left; align-items:center;">
                        <table style="border: none;">
                            <tr><td style="border: none;">$</td><td style="border: none; text-align:right;">{{ number_format( $pago->cantidad_abonar ,2)}}</td></tr>
                        </table>
                    </td>
                    <td style="text-align: center;">
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->fecha)->format('d')}} /
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->fecha)->format('m') }} /
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pago->fecha)->format('Y') }}
                    </td>
                    <td colspan="2">
    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</body>