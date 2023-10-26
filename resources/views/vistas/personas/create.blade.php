@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')

    <div class="mx-[60px] mt-[20px]">
            <!--Cabecera-->
            <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden">
                <div class="mx-[10px] md:mx-[50px] mt-[2px] text-fuente text-[20px]">
                    <a href="{{route('personas')}}" class="underline text-blue-500">Personas</a> 
                    / 
                    <a href="" class="underline text-blue-500">Nueva persona</a>
                  </div>

                <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">NUEVA PERSONA</p>
                <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
                <a href=""><button class="btn-primary">Aceptar</button></a>
                <a href=""><button class="btn-primary bg-rojo">Cancelar</button></a>
                </div>
            </div>

            <!--Formulario-->
            <div class="h-full  bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
                <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0">
                    <p class="text-fuente text-[20px]">INFORMACIÓN DE LA PERSONA</p>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                    <!--Primera Columna-->
                      <div>
                          <p class="text-fuente">Nombre(s):</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nombre" placeholder="nombre(s)">
                          @error('nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Paterno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_1" placeholder="Apellido Paterno">
                          @error('apellido_1')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Materno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_2" placeholder="Apellido Materno">
                          @error('apellido_2')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Estado:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="estado" placeholder="Estado">
                          @error('estado')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Ciudad:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ciudad" placeholder="Ciudad">
                          @error('ciudad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Celular:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="celular" placeholder="celular">
                          @error('celular')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Teléfono:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="telefono" placeholder="telefono">
                          @error('telefono')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Lugar de nacimiento:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="lugar_nac" placeholder="Lugar de nacimiento">
                          @error('lugar_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Fecha de nacimineto:</p>
                          <input type="date" class="input-pdv w-full mb-3 text-[15px]" name="fecha_nac" placeholder="Fecha de nacimiento">
                          @error('fecha_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
            
                      </div>
                    <!--Segunda Columna-->
                      <div>
            
                        <p class="text-fuente">Nacionalidad:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nacionalidad" placeholder="Nacionalidad">
                        @error('nacionalidad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Colonia:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="colonia" placeholder="Colonia">
                        @error('colonia')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Dirección:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="direccion" placeholder="Dirección">
                        @error('colonia')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">RFC:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="rfc" placeholder="RFC">
                        @error('rfc')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Estado Civil:</p>
                         <select class="input-pdv w-full mb-3" name="estado_civil" id="">
                          <option value="Solter@">Solter@</option>
                          <option value="Casad@">Casad@</option>
                          <option value="Viud@">Viud@</option>
                          <option value="Separad@">Separad@</option>
                          <option value="Divorciad@">Divorciad@</option>
                         </select>

                         <p class="text-fuente">CURP:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="curp" placeholder="CURP">
                         @error('curp')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">INE:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ine" placeholder="INE">
                         @error('ine')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Ocupación:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ocupacion" placeholder="Ocupación">
                         @error('ocupacion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Otros:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="otros" placeholder="Otros">
                         @error('otros')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
                      </div>
                      
                  </div>

          
    </div>

                <!--Formulario-->
                <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
                    <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0">
                        <p class="text-fuente text-[20px]">REFERENCIAS</p>
                    </div>
                    <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                    <!--Primera Columna-->
                        <div>
                            <p class="text-fuente text-[20px] mb-[10px]">Referencia 1</p>
                            <p class="text-fuente">Nombre(s):</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_nombre" placeholder="nombre(s)">
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_cel" placeholder="Celular">
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia1_parentesco" value="{{old('referencia1_parentesco')}}" >
                                <option value="" disabled selected>-- SELECCIONAR --</option>    
                                <option value="PADRE">PADRE</option>    
                                <option value="MADRE">MADRE</option>    
                                <option value="ESPOS@">ESPOS@</option>    
                                <option value="CONYUGUE">CONYUGUE</option>    
                                <option value="HIJ@">HIJ@</option>    
                                <option value="OTRO">OTRO</option>    
                            </select>
                        </div>
                    <!--Segunda Columna-->
                        <div>
                            <p class="text-fuente text-[20px] mb-[10px]">Referencia 2</p>
                            <p class="text-fuente">Nombre(s):</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_nombre" placeholder="nombre(s)">
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_cel" placeholder="Celular">
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia2_parentesco" value="{{old('referencia2_parentesco')}}" >
                                <option value="" disabled selected>-- SELECCIONAR --</option>    
                                <option value="PADRE">PADRE</option>    
                                <option value="MADRE">MADRE</option>    
                                <option value="ESPOS@">ESPOS@</option>    
                                <option value="CONYUGUE">CONYUGUE</option>    
                                <option value="HIJ@">HIJ@</option>    
                                <option value="OTRO">OTRO</option>    
                            </select>
                        </div>
                        
                    </div>
                </div>
            </form>
@endsection