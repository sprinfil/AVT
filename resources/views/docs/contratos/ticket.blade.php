<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
    }

    .titulo{
        text-align: center;
    }

    h1 + p {
            margin-top: 0;
        }

    .contenedor-header {
        width: 100%;
        height: 20px;
        text-align: center;
    }

    .contenedor-header img {
        width: 100px;
    }
    .contenedor-total{
        text-align: right;
        font-size: 30px;
        margin: 0px;
        padding: 0px;
    }
    .contenedor-total h1{
        font-size: 17px;
    }
    .contenedor-total p{
        font-size: 17px;
    }


    table {
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align:start;
        }

        td{
            border-bottom: 1px solid #ddd;
            width: 50%;
        }
        th {
            background-color: #0B3B61;
            color: white;
            padding: 4px 0px 4px 0px;
        }


</style>

<!--HEADER-->
<div class="contenedor-header">
    
    <h1>AVT</h1>
</div>
<hr>
<!--CONTENIDO-->
<div class="contendor-contenido">
    <h1>
        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('d') }}
        de
        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->monthName }}
        del
        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ticket->fecha)->format('Y') }}
    </h1>
    <h1>No. Ticket {{ $ticket->id }}</h1>

    <h1 class="" style="margin-top: 40px;">COMPRADOR</h1>
    <table>
        <tbody>
            <tr>
                <td class="">Nombre</td>
                <td>{{ $ticket->venta->Comprador->nombreCompleto() }}</td>
            </tr>
            <tr>
                <td>Cel</td>
                <td>{{ $ticket->venta->Comprador->celular }}</td>
            </tr>
        </tbody>
    </table>

    <h1 class="" style="margin-top: 40px;">LOTE</h1>
    <table>
        <tbody>
            <tr>
                <td>Zona</td>
                <td>{{ $ticket->venta->Zona->nombre }}</td>
            </tr>
            <tr>
                <td>Lote</td>
                <td>{{  $ticket->venta->Lote->lote}}</td>
            </tr>
            <tr>
                <td>Clave Catastral</td>
                <td>{{  $ticket->venta->Lote->catastral }}</td>
            </tr>
        </tbody>
    </table>

 
    <table style="margin-top: 40px;">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">Abono</td>
                <td style="text-align: center;">$ {{number_format( $ticket->cantidad_abonar ,2)}}</td>
            </tr>
        </tbody>
    </table>

    <div class="contenedor-total">
        <p>METODO DE PAGO: {{ $ticket->metodo_pago }}</p>
        @if($ticket->metodo_pago != "EFECTIVO")
        <p>REFERENCIA: {{ $ticket->referencia }}</p>
        @else
        <p>TOTAL: ${{number_format($ticket->cantidad_abonar,2)  }}</p>
        <p>PAGO CON: ${{number_format($ticket->pago_con,2)  }}</p>
        <p>CAMBIO: ${{number_format($ticket->cambio,2)  }}</p>
        @endif
    </div>

    <!--FIN-->
</div>

