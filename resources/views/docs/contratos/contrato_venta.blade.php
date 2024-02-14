<style>
    @page {
        size: 8.5in 14in;
        margin: 20mm 15mm;

    }

    body{
        background-image:  url('{{ public_path() }}/storage/imagenes/girasoles.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;

    }

    * {
        font-family: sans-serif;
        padding: 0px;
        margin: 0px;
    }

    .contenedor-principal {
        margin: 50px 70px 50px 70px;
    }

    .titulo-principal h1 {
        font-size: 16px;
        text-align: center;
    }

    .contendor-texto-contrato {
        margin-top: 20px;
    }

    .contendor-texto-contrato h1 {
        font-size: 16px;
        text-align: right;
    }

    .parrafo {
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: justify;
        font-size: 12px;
        line-height: 1.1;
    }

    .negrita {
        font-style: bold;
    }

    .centrar {
        text-align: center;
    }

    .contenedor-importes {
        margin-top: 10px;
        overflow: auto;
        max-width: 700px;
    }

    /*ESTILOS PARA LA TABLA*/
    table {
        border-collapse: collapse;
        /* colapsa los bordes de las celdas adyacentes en uno solo */
        width: 30%;
        /* ancho de la tabla */
        font-size: 10px;
        /*page-break-inside: avoid; */
    }

    /* Estilos para las celdas de encabezado */
    th {
        /* borde sólido de 1px en todas las celdas de encabezado */
        padding: 1px;
        /* relleno interior de la celda */
        vertical-align: top;
        font-weight: normal;
    }

    /* Estilos para las celdas de datos */
    td {
        border: 1px solid black;
        /* borde sólido de 1px en todas las celdas de datos */
        padding: 1px;
        /* relleno interior de la celda */
        text-align: center;
        /* alineación del texto a la izquierda */
    }
    .firma{
        text-align: center;
        width:250px;
     
    }
    .linea-negra{
        width: 100%;
        height: 1px;
        background-color: black;
    }
    img{
        position: fixed;
        z-index: -10;
        opacity: 0.3;
    }
</style>
<body>
    <div class="contenedor-principal">
      
      

        <div class="titulo-principal">
            <h1>CONTRATO DE PROMESA DE VENTA CON RESERVA DE DOMINIO</h1>
        </div>
    
        <div class="contendor-texto-contrato">
            <h1>CONTRATO No. {{ $venta->id }}</h1>
        </div>
    
        <div class="parrafo">
            <p>Contrato que celebran por una parte el <span style="font-style: bold">C.
                    {{ $venta->Vendedor->nombreCompleto() }}</span>, a quien en lo sucesivo se le denominará el Prominente
                Vendedor y por la otra el
                <span style="font-style: bold">C. {{ $venta->Comprador->nombreCompleto() }}</span>, a quienes en lo sucesivo
                se le denominarán el
                Prominente Comprador, al tenor de las siguientes:
            </p>
        </div>
    
        <div class="titulo-principal">
            <h1>DECLARACIONES</h1>
        </div>
    
        <div class="parrafo">
            <p>I.- DECLARA EL PROMINENTE VENDEDOR: </p>
        </div>
    
        <div class="parrafo">
            <p>a).- Ser legítimo propietario y poseedor, de un lote rustico ubicado en calle Sin Nombre, dentro del
                fraccionamiento "{{ $venta->Zona->nombre }}",
                identificado con el número <span class="negrita">{{ $venta->Lote->lote }}</span>, de la manzana número <span
                    class="negrita">{{ $venta->Lote->manzana }}</span>, con
                clave catastral<span class="negrita"> {{ $venta->Lote->catastral }} </span>, del Plano Oficial de esta
                ciudad de La Paz, Estado de Baja California Sur, con extensión superficial
                de <span class="negrita">{{ number_format($venta->Lote->superficie, 2) }} m2</span>., con las siguientes
                medidas y colindancias: </p>
        </div>
        @if ($venta->Lote->norte != null)
            <div class="parrafo centrar">
                <p><span class="negrita">Al Norte:</span> {{ number_format($venta->Lote->norte, 2) }} Mts. Con Lote C.C.</p>
                <p><span class="negrita">Al Sur:</span> {{ number_format($venta->Lote->sur, 2) }} Mts. Con Lote C.C.</p>
                <p><span class="negrita">Al Este:</span> {{ number_format($venta->Lote->este, 2) }} Mts. Con Lote C.C.</p>
                <p><span class="negrita">Al Oeste:</span> {{ number_format($venta->Lote->oeste, 2) }} Mts. Con Lote C.C.</p>
            </div>
        @endif
    
        @if ($venta->Lote->noreste != null)
            <div class="parrafo centrar">
                <p><span class="negrita">Al Noreste:</span> {{ number_format($venta->Lote->noreste, 2) }} Mts. Con Lote C.C.
                </p>
                <p><span class="negrita">Al Sureste:</span> {{ number_format($venta->Lote->sureste, 2) }} Mts. Con Lote C.C.
                </p>
                <p><span class="negrita">Al Suroeste:</span> {{ number_format($venta->Lote->suroeste, 2) }} Mts. Con Lote
                    C.C.</p>
                <p><span class="negrita">Al Noroeste:</span> {{ number_format($venta->Lote->noroeste, 2) }} Mts. Con Lote
                    C.C.</p>
            </div>
        @endif
    
        <div class="parrafo">
            <p>b).- Antecedentes de la propiedad. - {{ $venta->Zona->antecedentes }} <br>
                c).- Ser de nacionalidad mexicana, estar al corriente de sus impuestos, indica que tiene como domicilio para
                oír y recibir todo tipo de notificaciones, Calle
                {{ $venta->Vendedor->calle }}, Col. {{ $venta->Vendedor->colonia_direccion }}, CP.
                {{ $venta->Vendedor->codigo_postal }},en el Municipio de {{ $venta->Vendedor->municipio_direccion }},
                Estado de {{ $venta->Vendedor->estado_direccion }}, Cel: {{ $venta->Vendedor->celular }}.
            </p>
        </div>
    
        <div class="parrafo">
            <p>II.- DECLARA EL PROMINENTE COMPRADOR:</p>
        </div>
        <div class="parrafo">
            <p>Ser de nacionalidad mexicana, estar al corriente de sus impuestos, indica que tiene como domicilio para oír y
                recibir todo tipo de notificaciones, Calle
                {{ $venta->Comprador->calle }}, Col. {{ $venta->Comprador->colonia_direccion }}, CP.
                {{ $venta->Comprador->codigo_postal }},en el Municipio de {{ $venta->Comprador->municipio_direccion }},
                Estado de {{ $venta->Comprador->estado_direccion }}, Cel: {{ $venta->Comprador->celular }}.</p>
        </div>
        <div class="parrafo">
            <p>
                Cuenta con Clave Única de Registro de Población <span class="negrita">{{ $venta->Comprador->curp }}</span>
                y se identifica con credencial para
                votar con fotografía expedida por el Instituto Nacional Electoral, con folio número <span
                    class="negrita">{{ $venta->Comprador->ine }}</span>, siendo
                mayor de edad y con plena capacidad de goce y ejercicio.
            </p>
        </div>
    
        <div class="titulo-principal">
            <h1>CLAUSULAS</h1>
        </div>
    
        <div class="parrafo">
            <p>
                <span class="negrita">PRIMERA. - </span>El Promitente Vendedor promete vender y los Promitentes Compradores
                prometen comprar el bien
                inmueble descrito en la declaración primera, inciso “a”, de este contrato, cuyas características medidas y
                colindancias se dan por reproducidas aquí para todos los efectos legales.
            </p>
        </div>
        <div class="parrafo">
            <p><span class="negrita">SEGUNDA. - </span>El precio de la promesa de venta sobre el lote rústico motivo de este
                contrato es la suma de
                ${{ number_format($venta->costo_lote, 2) }}
                ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote) }} 00/100
                M.N.)
        </div>
    
        <div class="parrafo">
            <span class="negrita">TERCERA. - </span>El comprador se compromete a pagar el anterior precio como sigue: <br>
            A).- Importe de los productos materia de este contrato ${{ number_format($venta->costo_lote, 2) }}
            ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote) }} 00/100 M.N.)
            <br>
            B).- Como anticipo la cantidad de ${{ number_format($venta->enganche, 2) }}
            ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->enganche) }} 00/100 M.N.)
            <br>
            C).- Saldo a pagar de ${{ number_format($venta->costo_lote - $venta->enganche, 2) }}
            ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->costo_lote - $venta->enganche) }}
            00/100 M.N.) <br>
            D).- Pagadero en {{ $venta->meses_pagar }}
            ({{ trim(App\Http\Controllers\HerramientasController::convertirNumeroAPalabras2($venta->meses_pagar)) }})
            documentos de ${{ number_format($venta->monto_mes, 2) }}
            ({{ App\Http\Controllers\HerramientasController::convertirNumeroAPalabras($venta->monto_mes) }} 00/100 M.N.)
            c/u <br>
            E).- Los documentos tendrán su importe y vencimiento como sigue: <br>
            </p>
        </div>

        @if(count($importes) > 0)
        <div class="titulo-principal">
            <h1>IMPORTE EN MONEDA NACIONAL</h1>
        </div>
    
        @for($x = 0 ; $x < $numero_de_tablas_principales ; $x++)
        <div class="contenedor-importes">
            <table>
                <tr>
                    @for ($i = 0; $i < $gestor_tablas[$x] ; $i++)
                        <th>
                            <div class="contenedor-importes">
                                <table>
                                    <tr>
                                        <th style="border: solid 1px;">No.</th>
                                        <th style="border: solid 1px;">Importe</th>
                                        <th style="border: solid 1px;">Venciminetos</th>
                                    </tr>                              
                                    @for ($y = 1; $y <= count($arreglo_importes[$id_tabla_vista]); $y++)
                                        <tr>
                                            <td style="width:20px;">{{ $arreglo_importes[$id_tabla_vista][$y]->numero }}.-</td>
                                            <td style="width:70px;">$  
                                                {{ number_format($arreglo_importes[$id_tabla_vista][$y]->monto, 2) }}</td>
                                            <td style="width:125px; text-align:left;">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $arreglo_importes[$id_tabla_vista][$y]->vencimiento)->format('d') }}
                                                de
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $arreglo_importes[$id_tabla_vista][$y]->vencimiento)->monthName }}
                                                del
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $arreglo_importes[$id_tabla_vista][$y]->vencimiento)->format('Y') }}
                                            </td>
                                        </tr>
                                    @endfor                             
                                    {{  $id_tabla_vista = $id_tabla_vista + 1 }}
                                </table>
                            </div>
                        </th>
                    @endfor
                </tr>
            </table>
        </div>
        @endfor
        @endif
        <br>
    
        <div style="padding-top: 20px;">
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">CUARTA. - </span> El Promitente Vendedor, recibe dichos Pagares bajo la condición de Salvo Buen Cobro, de acuerdo
                con el Articulo 7 de la Ley General de Títulos y Operaciones de Crédito, por lo que considera pagado el precio de
                esta operación, cuando el ultimo de todos los Pagares con sus intereses moratorios en caso de demora hayan sido
                solventados por el Promitente Comprador.
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">QUINTA. - </span> La presente operación, se hace con reserva de dominio a favor del Promitente Vendedor, mientras se
                establece la escritura, la cual quedara formalizada una vez concluidos los tramites de la lotificación por las
                autoridades correspondientes y también los pagos respectivos, así mismo se aclara que el lote no cuenta con
                ningún servicio público y a su vez el Promitente Vendedor no se obliga a introducirlos. 
                </p>
            </div>
    
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">SEXTA. - </span> El Promitente Comprador se obligan al pago de todos los gastos, impuestos, Impuesto Sobre la Renta
                y honorarios que se originen por motivo de la escrituración correspondiente, una vez que se haya complementado
                el pago total del lote.             
                </p>
            </div>
    
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">SEPTIMA. - </span> Mientras el precio pactado, no sea cubierto íntegramente y sus accesorios en su caso, de conformidad
                de acuerdo con el artículo 2198 del código civil vigente para el Estado de Baja California Sur, por el cual Los
                Promitentes Compradores, no podrán disponer del bien materia del presente contrato, con la finalidad de enajenar,
                arrendar, habitar, ni ceder de manera alguna derechos sobre el mismo, hasta en tanto sea debidamente cubierto
                el crédito sostenido con el promitente vendedor, cualquier inobservancia a lo arriba dispuesto se dará por
                rescindido el presente contrato sin responsabilidad para el promitente vendedor.             
                </p>
            </div>
    
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">OCTAVA. -</span> En el caso de cualquier incumplimiento de los abonos mensuales estipulados no fueran cubiertos a su
                vencimiento El Promitente Vendedor tendrá los siguientes derechos: <br>
                 a). -Dar por vencidos todos los plazos y exigir en una sola partida el pago que el Promitente Comprador están
                debiendo más los intereses moratorios a razón de 10% mensuales. <br>
                 b). - O bien dar por resuelto el contrato y recoger del Promitente Comprador el lote marcado con el número
                No. <span class="negrita"> {{ $venta->Lote->lote }}</span>, de la manzana número <span class="negrita"> {{ $venta->Lote->manzana }}</span>, con clave catastral  <span class="negrita"> {{ $venta->Lote->catastral }}</span>.
                </p>
            </div>
    
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">NOVENA. -</span> El Promitente Comprador, no quedaran libre de ninguna de las obligaciones que asume, en virtud del
                presente contrato. 
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">DECIMA. -</span> Las acciones que competen al Promitente Vendedor se establecen a la elección de éste en el lugar
                que se celebre el presente contrato en el domicilio del Promitente Vendedor por lo que ambas partes lo acogen
                de acuerdo con lo previsto en el Código de Procedimientos Civiles vigente en el Estado de Baja California Sur.
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">DECIMA PRIMERA. -</span> Todos los gastos y costos judiciales o extrajudiciales que el Promitente Vendedor tenga
                que erogar para hacer efectivo este contrato serán cubiertos por el Promitente Comprador. 
                
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">DECIMA SEGUNDA. -</span> Las partes se someten para la interpretación de este contrato en lo conducente a lo
                estipulado en el Código Civil vigente para el Estado de Baja California Sur y en lo establecido en el Código Civil
                vigente para la Ciudad de México.  
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <span class="negrita">DECIMA TERCERA. -</span> Garantiza las obligaciones derivadas de los pagarés del Promitente Comprador  <span class="negrita"> C.
                    {{ $venta->Comprador->nombreCompleto()}}</span>, con calidad de fiador renunciando a los beneficios de orden y exclusión según los
                Artículos 2726 y 2728 del Código Civil vigente en el Estado de Baja California Sur. 
                
                </p>
            </div>
            <div class="parrafo" style="padding-top: 10px;">
                <p>Leído que fue el presente contrato de promesa de venta con reserva de dominio por las partes que en el
                    intervinieron y enterados del valor y alcances, legales, de todas y cada una de sus cláusulas, que conforme y por
                    considerar que no existe dolo, error o mala fe lo firman en original y copia en la Ciudad de la Paz, Capital y puerto
                    del Estado de Baja California Sur, a los <span class="negrita"> {{Carbon\Carbon::now()->format('d')  }} </span>({{trim( App\Http\Controllers\HerramientasController::convertirNumeroAPalabras2(Carbon\Carbon::now()->format('d') ) )}}) días del mes de <span class="negrita">{{ Carbon\Carbon::now()->monthName }}</span>  del  <span class="negrita"> {{ Carbon\Carbon::now()->format('Y') }}</span> ({{trim( App\Http\Controllers\HerramientasController::convertirNumeroAPalabras2(Carbon\Carbon::now()->format('Y') ) )}}).
                    </p>
                </p>
            </div>
        </div>
        <div class="firma" style="margin-left: 220px; margin-top: 80px;">
            <div class="linea-negra"></div>
            <p class="negrita">EL VENDEDOR</p>
            <p>C. {{ $venta->Vendedor->nombreCompleto() }}.</p>
        </div>
    
        <table>
            <thead>
                <tr>
                    <th style="font-size: 15px;">    
                        <div class="firma" style="padding-top: 60px; display:inline-block;">
                        <div class="linea-negra"></div>
                        <p class="negrita">EL COMPRADOR</p>
                        <p>C. {{ $venta->Comprador->nombreCompleto() }}.</p>
                    </div>
                    </th>
    
                    <th style="font-size: 15px;">    
                        <div class="firma" style="margin-top: 60px; margin-left:200px; display:inline-block;">
                        <div class="linea-negra"></div>
                        <p class="negrita">EL AVAL</p>
                        <p>C. {{ $venta->Aval->nombreCompleto() }}.</p>
                    </div>
                </th>
                </tr>
            </thead>
        </table>
    
        <table>
            <thead>
                <tr>
                    <th style="font-size: 15px;">    
                        <div class="firma" style="margin-top: 90px; display:inline-block;">
                        <div class="linea-negra"></div>
                        <p class="negrita">TESTIGO</p>
                    </div>
                    </th>
    
                    <th style="font-size: 15px;">    
                        <div class="firma" style="margin-top: 90px; margin-left:200px; display:inline-block;">
                        <div class="linea-negra"></div>
                        <p class="negrita">TESTIGO</p>
                    </div>
                </th>
                </tr>
            </thead>
        </table>
    
    </div>
</body>

