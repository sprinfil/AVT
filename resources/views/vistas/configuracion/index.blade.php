@extends('layouts.principal')

@section('titulo')
    Configruacion
@endsection

@section('contenido')

    <!--navegacion superior-->
    <div class=" text-fuente text-[15px] shadow-lg bg-principal  px-5 py-2 ">
        <a href="" class="underline text-blue-500">CONFIGURACION</a>
    </div> 

<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!--Cabecera-->
    <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden">
        <div class="mx-[10px] md:mx-[50px]  justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">CONFIGURACIÓN</p>
        </div>
    </div>

        <!--CONTENEDOR PRINCIPAL-->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-[100px] ">


        <!--COPIA DE SEGURIDAD-->
        <div class=" bg-terciario shadow-lg  mt-[20px] rounded-lg  w-full ">

            <div class="w-full h-[50px] bg-principal rounded-md  py-8 px-7 flex justify-center items-center mt-0  border-b border-fuente">
                <p class="text-fuente text-[12px] md:text-[15px]">COPIA DE SEGURIDAD</p>
            </div>

            <div class="p-4">
            <!--Primera fila-->
                <div class="">
                    <p class="text-fuente text-[15px]">Genera una copia de seguridad que se almacena en el drive previamente configurado. Las copias de seguridad estan configuradas automaticamente para que se generen semanalmente o bien puedes generar una copia de seguridad manualmente pulsando "generar".</p>
                </div>
                <!--segunda fila-->
                <div class="mt-[40px]">
                    <a href="https://drive.google.com/drive/u/3/my-drive">
                        <div class="btn-primary flex mt-[20px] mb-[20px] text-center items-center justify-center">
                            <p class="underline">DRIVE</p>
    
                            <svg class="w-14" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" height="32" id="svg4063" version="1.1" viewBox="0 0 32 32.000001" width="32"><defs id="defs4065"/><g id="layer1" transform="translate(0,-1020.3621)"><g id="g5699"><path d="m 12.50389,1026.8524 6.95703,12.082 7.99805,0.016 -6.92383,-12.045 -8.03125,-0.053 z m 10.94922,19.0156 0.006,0.01 0.006,-0.01 -0.0117,0 z" id="path4126" style="fill:#ffaf00;fill-opacity:1;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round"/><path d="m 13.60872,1038.9236 13.89197,0.026 -4.00713,6.9028 -14,0" id="path4124" style="fill:#0084ff;fill-opacity:1;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round"/><path d="m 12.49356,1026.8524 -6.99357,12.098 4,6.9277 6.98046,-12.1211" id="path4122" style="fill:#1eb615;fill-opacity:1;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round"/><path d="m 12.501953,1026.3457 a 0.50004997,0.50004997 0 0 0 -0.441406,0.2559 l -6.9941408,12.0976 a 0.50004997,0.50004997 0 0 0 0,0.502 l 4,6.9277 a 0.50004997,0.50004997 0 0 0 0.8671876,-0 l 6.9804682,-12.1211 a 0.50004997,0.50004997 0 1 0 -0.867187,-0.4981 L 9.5,1044.877 l -3.421875,-5.9258 6.847656,-11.8477 a 0.50004997,0.50004997 0 0 0 -0.423828,-0.7578 z" id="path3851" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"/><path d="m 13.609375,1038.4238 a 0.50004997,0.50004997 0 1 0 -0.002,1 l 13.02539,0.024 -3.427734,5.9043 -13.7109374,0 a 0.50004997,0.50004997 0 1 0 0,1 l 14.0000004,0 a 0.50004997,0.50004997 0 0 0 0.43164,-0.2481 l 4.007813,-6.9023 a 0.50004997,0.50004997 0 0 0 -0.431641,-0.752 l -13.892578,-0.025 z" id="path3853" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"/><path d="m 12.507812,1026.3516 a 0.50004997,0.50004997 0 0 0 -0.4375,0.75 l 6.957032,12.082 a 0.50004997,0.50004997 0 0 0 0.43164,0.25 l 7.998047,0.018 a 0.50004997,0.50004997 0 0 0 0.435547,-0.75 l -6.923828,-12.045 a 0.50004997,0.50004997 0 0 0 -0.429688,-0.25 l -8.03125,-0.055 z m 0.863282,1.0058 6.873047,0.047 6.349609,11.0449 -6.84375,-0.014 -6.378906,-11.0781 z m 10.082031,18.0098 a 0.50004997,0.50004997 0 0 0 -0.429687,0.7578 l 0.0078,0.01 a 0.50004997,0.50004997 0 0 0 0.857422,0 l 0.0059,-0.01 a 0.50004997,0.50004997 0 0 0 -0.429687,-0.7578 l -0.01172,0 z m -0.410156,0.2539 0.833984,0 -0.417969,0.7363 -0.416015,-0.7363 z" id="path3855" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"/></g></g></svg>
                        </div>
                    </a>
                    <a href="{{route('generar_copia_seguridad')}}">
                        <button class="btn-primary w-full">GENERAR</button>
                    </a>
                </div>
            </div>
        </div>

        <!--ACTUALIZACIONES-->
        <div class=" bg-terciario shadow-lg  mt-[20px] rounded-lg w-full">

            <div class="w-full h-[50px] bg-principal rounded-md  py-8 px-7 flex justify-center items-center mt-0  border-b border-fuente ">
                <p class="text-fuente text-[12px] md:text-[15px]">ACTUALIZAR</p>
            </div>

            <div class="p-4 text-fuente ">
            <!--Primera fila-->
                <div class="max-h-[300px] overflow-y-auto no-scrollbar">
                    <p>
                        Versión actual (v 2.0.1)
                        <br>
                        <br>
                        <br>
                        <-- Actualización v 2.0.1. -->
                        <br>
                        - El precio del lote no se pide al crear la zona
                        <br>
                        - La orientación de los campos de lote fueron reordenados para la mejor identifiación
                        <br>
                        <br>
                        <br>
                        Versión actual (v 2.0.0)
                        <br>
                        <br>
                        <br>
                        <-- Actualización v 2.0.0. -->
                        <br>
                        - Nuevo modulo, Zonas y lotes
                        <br>
                        <br>
                        <br>
                        <-- Actualización v 1.0.2. -->
                        <br>
                        - Ahora hay menos campos obligatorios al dar de alta la persona.    
                        <br>
                        - Se reacomodaron los campos al dar de alta la persona.  
                        <br>
                        <br>                  
                        <br>
                         < -- Actualización v 1.0.1. -->
                        <br>
                        - Nuevos campos para dar de alta persona.
                        <br>
                        - Generar pdf con la información de la persona.
                        <br>
                        - Subir foto de persona.
                        <br>
                        - Se agrego confirmar contraseña en usuarios.
                        <br>
                        - Subir foto de persona.
                        <br>
                        - Poder marcar a la persona.
                    </p>        
                </div>
                <!--segunda fila-->
                <div class="">
                    <a href="{{route('actualizar_sistema')}}"><button class="btn-primary w-full mt-[30px]">ACTUALIZAR</button></a>
                </div>
            </div>
        </div>

</div>
@endsection