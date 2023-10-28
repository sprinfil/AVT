@extends('layouts.principal')

@section('titulo')
    Personas
@endsection

@section('contenido')

    <div class="mx-2 md:mx-[60px] mt-[20px]">
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
                <form action="{{route('personas_store')}}" method="POST" enctype="multipart/form-data">
                <button class="btn-primary" type="submit">Aceptar</button>
                <a href=""><button class="btn-primary bg-rojo">Cancelar</button></a>
                </div>
            </div>

            <!--Formulario-->
            <div class="h-full  bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
                <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0">
                    <p class="text-fuente text-[20px]">INFORMACIÓN DE LA PERSONA</p>
                </div>
                  @csrf
                  <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                    <!--Primera Columna-->
                      <div>
                          <p class="text-fuente">Nombre(s):</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nombre" placeholder="nombre(s)" value="{{old('nombre')}}" >
                          @error('nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Paterno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_1" placeholder="Apellido Paterno" value="{{old('apellido_1')}}" >
                          @error('apellido_1')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Materno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_2" placeholder="Apellido Materno" value="{{old('apellido_2')}}" >
                          @error('apellido_2')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Estado:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="estado" placeholder="Estado" value="{{old('estado')}}" >
                          @error('estado')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Ciudad:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ciudad" placeholder="Ciudad" value="{{old('ciudad')}}" >
                          @error('ciudad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Celular:</p>
                          <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="celular" placeholder="celular"  value="{{old('celular')}}" >
                          @error('celular')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Teléfono:</p>
                          <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="telefono" placeholder="telefono" value="{{old('telefono')}}" >
                          @error('telefono')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Lugar de nacimiento:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="lugar_nac" placeholder="Lugar de nacimiento" value="{{old('lugar_nac')}}" >
                          @error('lugar_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Fecha de nacimineto:</p>
                          <input type="date" class="input-pdv w-full mb-3 text-[15px]" name="fecha_nac" placeholder="Fecha de nacimiento" value="{{old('fecha_nac')}}">
                          @error('fecha_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
            
                      </div>
                    <!--Segunda Columna-->
                      <div>
            
                        <p class="text-fuente">Nacionalidad:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nacionalidad" placeholder="Nacionalidad" value="{{old('nacionalidad')}}">
                        @error('nacionalidad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Colonia:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="colonia" placeholder="Colonia" value="{{old('colonia')}}">
                        @error('colonia')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Dirección:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="direccion" placeholder="Dirección" value="{{old('direccion')}}">
                        @error('direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">RFC:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="rfc" placeholder="RFC" value="{{old('rfc')}}">
                        @error('rfc')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Estado Civil:</p>
                         <select class="input-pdv w-full mb-3" name="estado_civil" id="" value="{{old('estado_civil')}}">
                          <option value="" disabled selected>-- SELECCIONAR --</option>  
                          <option value="SOLTER@" @if(old('estado_civil') === 'SOLTER@') selected @endif>SOLTER@</option>
                          <option value="CASAD@" @if(old('estado_civil') === 'CASAD@') selected @endif>CASAD@</option>
                          <option value="VIUD@" @if(old('estado_civil') === 'VIUD@') selected @endif>VIUD@</option>
                          <option value="SEPARAD@" @if(old('estado_civil') === 'SEPARAD@') selected @endif>SEPARAD@</option>
                          <option value="DIVORCIAD@" @if(old('estado_civil') === 'DIVORCIAD@') selected @endif>DIVORCIAD@</option>
                         </select>
                         @error('estado_civil')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">CURP:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="curp" placeholder="CURP" value="{{old('curp')}}">
                         @error('curp')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">INE:</p>
                         <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="ine" placeholder="INE" value="{{old('ine')}}">
                         @error('ine')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Ocupación:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ocupacion" placeholder="Ocupación" value="{{old('ocupacion')}}">
                         @error('ocupacion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Otros:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="otros" placeholder="Otros" value="{{old('otros')}}">
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
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_nombre" placeholder="nombre(s)" value="{{old('referencia1_nombre')}}">
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_cel" placeholder="Celular" value="{{old('referencia1_cel')}}">
                            @error('referencia1_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia1_parentesco" value="{{old('referencia1_parentesco')}}" >
                                <option value="" disabled selected>-- SELECCIONAR --</option>    
                                <option value="PADRE" @if(old('referencia1_parentesco') === 'PADRE') selected @endif>PADRE</option>    
                                <option value="MADRE" @if(old('referencia1_parentesco') === 'MADRE') selected @endif>MADRE</option>    
                                <option value="ESPOS@" @if(old('referencia1_parentesco') === 'ESPOS@') selected @endif>ESPOS@</option>    
                                <option value="CONYUGUE" @if(old('referencia1_parentesco') === 'CONYUGUE') selected @endif>CONYUGUE</option>    
                                <option value="HIJ@" @if(old('referencia1_parentesco') === 'HIJ@') selected @endif>HIJ@</option>    
                                <option value="OTRO" @if(old('referencia1_parentesco') === 'OTRO') selected @endif>OTRO</option>    
                            </select>
                        </div>
                    <!--Segunda Columna-->
                        <div>
                            <p class="text-fuente text-[20px] mb-[10px]">Referencia 2</p>
                            <p class="text-fuente">Nombre(s):</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_nombre" placeholder="nombre(s)">
                            @error('referencia2_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_cel" placeholder="Celular" value="{{old('referencia2_cel')}}">
                            @error('referencia2_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia2_parentesco">
                                <option value="" disabled selected>-- SELECCIONAR --</option>    
                                <option value="PADRE" @if(old('referencia2_parentesco') === 'PADRE') selected @endif>PADRE</option>    
                                <option value="MADRE" @if(old('referencia2_parentesco') === 'MADRE') selected @endif>MADRE</option>    
                                <option value="ESPOS@" @if(old('referencia2_parentesco') === 'ESPOS@') selected @endif>ESPOS@</option>    
                                <option value="CONYUGUE" @if(old('referencia2_parentesco') === 'CONYUGUE') selected @endif>CONYUGUE</option>    
                                <option value="HIJ@" @if(old('referencia2_parentesco') === 'HIJ@') selected @endif>HIJ@</option>    
                                <option value="OTRO" @if(old('referencia2_parentesco') === 'OTRO') selected @endif>OTRO</option>    
                            </select>
                        </div>
                        
                    </div>
                </div>
            </form>
@endsection

