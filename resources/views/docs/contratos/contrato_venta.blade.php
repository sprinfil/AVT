<style>
     @page {
        size: 8.5in 14in; /* Tamaño de página en pulgadas (oficio) */
    }

    *{
        font-family: sans-serif;
        padding: 0px;
        margin: 0px;
    }
    .contenedor-principal{
        margin: 50px 70px 50px 70px;
    }
    .titulo-principal h1{
        font-size: 16px;
        text-align: center;
    }

    .contendor-texto-contrato{
        margin-top: 20px;
    }

    .contendor-texto-contrato h1{
        font-size: 16px;
        text-align: right;
    }

    .parrafo{
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: justify;
        font-size: 14px;
        line-height: 1.2;
    }

    .negrita{
        font-style: bold;
    }

    .centrar{
        text-align: center;
    }

    .contenedor-importes{
        margin-top: 20px;
    }

    /*ESTILOS PARA LA TABLA*/
    table {
    border-collapse: collapse; /* colapsa los bordes de las celdas adyacentes en uno solo */
    width: 100%; /* ancho de la tabla */
    font-size: 15px;
    page-break-inside: avoid; 
}

/* Estilos para las celdas de encabezado */
th {
    border: 1px solid black; /* borde sólido de 1px en todas las celdas de encabezado */
    padding: 1px;/* relleno interior de la celda */
    text-align: center; /* alineación del texto a la izquierda */
}

/* Estilos para las celdas de datos */
td {
    border: 1px solid black; /* borde sólido de 1px en todas las celdas de datos */
    padding: 1px;/* relleno interior de la celda */
    text-align: center; /* alineación del texto a la izquierda */
}
</style>

<div class="contenedor-principal">

    <div class="titulo-principal">
        <h1>CONTRATO DE PROMESA DE VENTA CON RESERVA DE DOMINIO</h1>
    </div>

    <div class="contendor-texto-contrato">
        <h1>CONTRATO No. {{ $venta->id }}</h1>
    </div>

    <div class="parrafo">
        <p>Contrato que celebran por una parte el <span style="font-style: bold">C. {{ $venta->Vendedor->nombreCompleto() }}</span>, a quien en lo sucesivo se le denominará el Prominente Vendedor y por la otra el 
            <span style="font-style: bold">C. {{ $venta->Comprador->nombreCompleto()}}</span>, a quienes en lo sucesivo se le denominarán el 
            Prominente Comprador, al tenor de las siguientes: </p>
    </div>

    <div class="titulo-principal">
        <h1>DECLARACIONES</h1>
    </div>

    <div class="parrafo">
        <p>I.- DECLARA EL PROMINENTE VENDEDOR: </p>
    </div>

    <div class="parrafo">
        <p>a).- Ser legítimo propietario y poseedor, de un lote rustico ubicado en calle Sin Nombre, dentro del fraccionamiento "{{ $venta->Zona->nombre }}",
        identificado con el número <span class="negrita">{{ $venta->Lote->lote }}</span>, de la manzana número <span class="negrita">{{ $venta->Lote->manzana }}</span>, con 
    clave catastral<span class="negrita"> {{ $venta->Lote->catastral }} </span>, del Plano Oficial de esta ciudad de La Paz, Estado de Baja California Sur, con extensión superficial
    de <span class="negrita">{{ number_format( $venta->Lote->superficie ,2)}} m2</span>., con las siguientes medidas y colindancias: </p>
    </div>
    @if($venta->Lote->norte != null)
        <div class="parrafo centrar">
            <p><span class="negrita">Al Norte:</span> {{ number_format($venta->Lote->norte,2) }} Mts. Con Lote C.C.</p>
            <p><span class="negrita">Al Sur:</span> {{ number_format($venta->Lote->sur,2) }} Mts. Con Lote C.C.</p>
            <p><span class="negrita">Al Este:</span> {{ number_format($venta->Lote->este,2) }} Mts. Con Lote C.C.</p>
            <p><span class="negrita">Al Oeste:</span> {{ number_format($venta->Lote->oeste,2) }} Mts. Con Lote C.C.</p>
        </div>
    @endif

    @if($venta->Lote->noreste != null)
    <div class="parrafo centrar">
        <p><span class="negrita">Al Noreste:</span> {{ number_format($venta->Lote->noreste,2) }} Mts. Con Lote C.C.</p>
        <p><span class="negrita">Al Sureste:</span> {{ number_format($venta->Lote->sureste,2) }} Mts. Con Lote C.C.</p>
        <p><span class="negrita">Al Suroeste:</span> {{ number_format($venta->Lote->suroeste,2) }} Mts. Con Lote C.C.</p>
        <p><span class="negrita">Al Noroeste:</span> {{ number_format($venta->Lote->noroeste,2) }} Mts. Con Lote C.C.</p>
    </div>
    @endif

    <div class="parrafo">
        <p>b).- Antecedentes de la propiedad. - Escritura pública número 7,165, volumen número 83, en la ciudad de La Paz, capital del estado de Baja California Sur, México
            , a los 7 (siete) días del mes de abril del año 1999 (mil novecientos noventa y nueve), expedida el Licenciado Roberto Fort Amador, notario público número cuatro e inscrita
            en el Registro Público de la Propiedad bajo el número 927, del Volumen número 239, de la Sección Primera, de fecha 11 de mayo de 1999. <br>
            c).- Ser de nacionalidad mexicana, estar al corriente de sus impuestos, indica que tiene como domicilio para oír y recibir todo tipo de notificaciones, Calle 
            Ignacio Altamirano esq. Con Isla Coronado local 1, Fraccionamiento Loreto, CP 23099, municipio La Paz, Baja California Sur, Tel: 612-12-3-27-07.
        </p>
    </div>

    <div class="parrafo">
        <p>II.- DECLARA EL PROMINENTE COMPRADOR:</p>
    </div>
    <div class="parrafo">
        <p>a)- Ser de nacionalidad mexicana, estar al corriente de sus impuestos, indica que tiene como domicilio para oír 
            y recibir todo tipo de notificaciones, Calle Cabo San Lucas 218, Col. Bellavista, C.P. 23050, en el Municipio de La 
            Paz, Estado de Baja California Sur, Cel: (647) 10-6-55-81.</p>
    </div>
    <div class="parrafo">
        <p>
            Cuenta con Clave Única de Registro de Población <span class="negrita">{{ $venta->Comprador->curp }}</span> y se identifica con credencial para 
        votar con fotografía expedida por el Instituto Nacional Electoral, con folio número <span class="negrita">{{ $venta->Comprador->ine }}</span>, siendo 
        mayor de edad y con plena capacidad de goce y ejercicio. 
        </p>
    </div>

    <div class="titulo-principal">
        <h1>CLAUSULAS</h1>
    </div>

    <div class="parrafo">
        <p>
            <span class="negrita">PRIMERA. - </span>El Promitente Vendedor promete vender y los Promitentes Compradores prometen comprar el bien 
            inmueble descrito en la declaración primera, inciso “a”, de este contrato, cuyas características medidas y 
            colindancias se dan por reproducidas aquí para todos los efectos legales. 
        </p>
    </div>
    <div class="parrafo">
        <p><span class="negrita">SEGUNDA. - </span>El precio de la promesa de venta sobre el lote rústico motivo de este contrato es la suma de 
            ${{ number_format($venta->costo_lote ,2)}} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote) }} 00/100 M.N.)
    </div>
    
    <div class="parrafo">
        <span class="negrita">TERCERA.- </span>El comprador se compromete a pagar el anterior precio como sigue: <br>
        A).- Importe de los productos materia de este contrato   ${{ number_format($venta->costo_lote ,2)}} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote) }} 00/100 M.N.) <br>
        B).- Como anticipo la cantidad de ${{ number_format($venta->enganche ,2) }} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->enganche) }} 00/100 M.N.)  <br>
        C).- Saldo a pagar de ${{ number_format(($venta->costo_lote-$venta->enganche) ,2)}} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote-$venta->enganche)  }} 00/100 M.N.) <br>
        D).- Pagadero en {{ $venta->meses_pagar }} ({{trim( App\Http\Controllers\HerramientasController::convertirNumeroAPalabras2($venta->meses_pagar))}}) documentos de ${{ number_format($venta->monto_mes,2) }} ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->monto_mes)  }} 00/100 M.N.) c/u <br> 
        E).- Los documentos tendrán su importe y vencimiento como sigue: <br>
        </p>
    </div>
    <div class="contenedor-importes">
        <table>
            <tr>
                <th>No.</th>
                <th>Importe</th>
                <th>Venciminetos</th>
            </tr>
            @foreach($importes as $importe)
            <tr>
                <td>{{$importe->numero }}</td>
                <td>$ {{ number_format( $importe->monto,2)}}</td>
                <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->format('d') }} de 
                    {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->monthName }} del
                    {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $importe->vencimiento)->format('Y') }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
