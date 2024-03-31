<style>
   *{
       font-family: sans-serif;
   }
   table{
       width: 100%;
       border: solid 1px;
       border-collapse: collapse;
       margin-bottom: 12px;
     
   }
   th, td {
       border: solid 1px; 
       padding: 3px; 
       
   }
   td{
       font-size: 13px;
   }
   th{
    font-size: 14px;
   }
</style>
@foreach($pagos as $pago)

<body>
    <table>
        <thead>
            <tr>
                <th style="width:120px;">
                    Nombre:
                </th>
                <td style="text-align: left;" colspan="2">
                    {{ $pago->venta->Comprador->nombreCompleto() }}
                </td>
                <th style="width:120px;">
                    Contrato No.
                </th>
                <td style="text-align:center;">
                    {{ $pago->venta->no_contrato}}
                </td>
            </tr>
        </thead>

        <tr>
            <th>
                Clave Catastral:
            </th>
            <td style="width:120px; text-align:center;">
                {{ $pago->venta->Lote->catastral}}
            </td>
            <td colspan="3" rowspan="5" style="text-align: center;">
                <div style="margin-bottom:40px;">Recibí</div>
                <div style="margin-top: 40px; width:300px; margin-left:67px;"><hr></div>
                <div>  {{ $pago->venta->Zona->dueno->nombreCompleto()}}</div>
            </td>
        </tr>
        <tr>
            <th style="text-align:center;">
                Lote:
            </th>
            <td style="text-align:center;">
                {{ $pago->venta->Lote->lote}}
            </td>
        </tr>
        <tr>
            <th>
                Manzana:
            </th>
            <td style="width:120px; text-align:center;">
                {{ $pago->venta->Lote->manzana}}
            </td>
        </tr>
        <tr>
            <th>
                Documentos:
            </th>
            <td style="width:120px; text-align:center;">
                {{ $pago->numeros_pagados}} / {{ $pago->venta->meses_pagar }}
            </td>
        </tr>
        <tr>
            <th>
                Importe Total:
            </th>
            <td style="width:120px;">
                <table style="border: none;">
                    <tr><td style="border: none;">$</td><td style="border: none; text-align:right;"> {{number_format($pago->cantidad_abonar,2) }}</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <th>
                Observación:
            </th>
            <td colspan="2">

            </td>
            <th>
                Fecha y hora:
            </th>
            <td style="text-align:center;">
                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$pago->fecha)->format('d/m/Y') }}
            </td>
        </tr>
    </table>
    @endforeach
</body>

