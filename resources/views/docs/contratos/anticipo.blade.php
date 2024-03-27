<style>
    @page {
        margin: 20mm 15mm;
    }

    * {
        font-family: sans-serif;
        padding: 0px;
        margin: 0px;
    }

    .margenes {
        margin: 20px 60px 20px 60px;

    }

    .contenedor-principal {}

    img {
        width: 300px;
        height: 160px;
    }
    .inline-block {
        display: inline-block;
        vertical-align: top; /* Alinear verticalmente al principio */
    }
    .negrita{
        font-weight: bold;
    }
    .parrafo{
        font-size: 14px;
        line-height: 30px;
    }
    table{
        width: 100%;
        border: 2px solid;
    }
    td{
        padding: 5px 0px 5px 5px;
    }
    .negrita{
        font-style: bold;
    }
    .subrayado{
        text-decoration: underline;
    }
</style>


<body>
    <div class="margenes">
        <div class="contenedor-principal">

            <img src="{{ public_path() }}/imagenes_contratos/girasoles.png" alt="" class="inline-block">
            <p class="inline-block negrita" style="margin: 130px 0px 0px 160px;">Bueno por ${{ number_format($venta->enganche,2) }}</p>
            <p class="parrafo">
                RECIBÍ DEL <span class="negrita"> C. {{ strtoupper($venta->Comprador->nombreCompleto()) }}</span>, LA CANTIDAD DE ${{ number_format($venta->enganche,2) }} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras3($venta->enganche) }}),<br/>
                POR CONCEPTO: <span class="negrita">ANTICIPO DE LA COMPRAVENTA </span> DEL LOTE IDENTIFICADO CON EL NÚMERO <span class="negrita">{{ $venta->Lote->lote ?? 'SIN NUMERO DE LOTE' }}</span>, DE LA MANZANA NÚMERO <span class="negrita">{{ $venta->Lote->manzana ?? 'SIN MANZANA' }}</span>, CON CLAVE CATASTRAL <span class="negrita">{{ $venta->Lote->catastral ?? 'SIN CLAVE CATASTRAL' }}</span>, CON EXTENSIÓN SUPERFICIAL DE <span class="negrita">{{ number_format($venta->Lote->superfice,2)  ?? 'SIN SUPERFICIE' }} M2</span>  ,UBICADO EN CALLE SIN NOMBRE, DENTRO DEL FRACCIONAMIENTO "<span class="">{{ strtoupper($venta->Zona->nombre ) ?? 'SIN ZONA' }}</span>", EN EL MUNICIPIO DE LA PAZ, ESTADO DE BAJA CALIFORNIA SUR. 
                QUEDANDO PENDIENTE LA FIRMA DEL CONTRATO Y PAGARES RESPECTIVAMENTE.
                <span class="negrita">EL PLAN DE PAGO SERÁ EL SIGUIENTE:</span>
            </p>
            <table style="margin: 20px 0px 20px 0px; font-size: 11px;">
                <thead>
                   <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                   </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="negrita">IMPORTE TOTAL:</td>
                        <td>$ {{ number_format($venta->costo_lote,2) }}</td>
                        <td>({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras3($venta->costo_lote) }})</td>
                    </tr>
                    <tr>
                        <td class="negrita">ANTICIPO:</td>
                        <td>$ {{ number_format($venta->enganche,2) }}</td>
                        <td>({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras3($venta->enganche) }})</td>
                    </tr>
                    <tr>
                        <td class="negrita">SALDO A PAGAR:</td>
                        <td>$ {{ number_format($venta->costo_lote - $venta->enganche ,2) }}</td>
                        <td>({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras3($venta->costo_lote - $venta->enganche) }})</td>
                    </tr>
                    <tr>
                        <td class="negrita">{{ $venta->meses_pagar }} MENSUALIDADES DE:</td>
                        <td>$ {{ number_format( $venta->monto_mes ,2)}}</td>
                        <td>({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras3($venta->monto_mes) }})</td>
                    </tr>
                    <tr>
                        <td class="negrita">DIA DE VENCIMINETO:</td>
                        <td>{{ $venta->dia_mensualidad }}</td>
                        <td>DE CADA MES, COMO SE INDICARÁ EN EL CONTRATO.</td>
                    </tr>
                </tbody>
            </table>
            <p class="parrafo negrita">
                NOTA: EN CASO DE CANCELACIÓN POR PARTE DEL COMPRADOR, <span class="subrayado">NO SE DEVOLVERÁ EL IMPORTE DEL ANTICIPO</span> , EL CUAL SE QUEDARÁ PARA GASTOS DE VENTA Y ADMINISTRACIÓN 
            </p>
            <div style="width: 100%; text-align:right; margin: 20px 0px 20px 0px;">
                <p class="parrafo negrita">
                    LA PAZ, BAJA CALIFORNIA SUR A {{    Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->format('d') }} DE {{   strtoupper(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->monthName ) }} DEL {{    Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $venta->fecha)->format('Y') }}.
                </p>
            </div>
            <p class="parrafo negrita" style="margin-left: 125px;">
                RECIBÍ
            </p>
            <div style="width:300px; margin-top:50px;  text-align:center;">
                <hr>
                <p class="parrafo negrita">
                    C. {{ strtoupper($venta->Zona->Dueno->nombreCompleto()) }}
                </p>
            </div>


            <div style="margin-top: 100px; text-align:center; width: 100%; font-size:14px;">
                <p>
                    IGNACIO ALTAMIRANO LOCAL 1, ESQ. ISLA CORONADO
                </p>
                <p>
                    FRACC. RESIDENCIAL LORETO, C.P. 23099
                </p>
                <p>
                    LA PAZ, B.C.S., TEL. (612) 12-3-27-07
                </p>
            </div>

        </div>

    </div>
            
    <div style="margin-top: 40px; width:100%; height: 30px; background-color:#FFC000;">

    </div>
</body>
