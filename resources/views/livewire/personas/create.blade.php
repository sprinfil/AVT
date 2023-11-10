<div>
    
    <div class="mx-2 md:mx-[60px] mt-[20px]">
        <!--Cabecera-->
        <div class=" w-full h-full bg-terciario shadow-lg rounded-md overflow-x-hidden">
                <!--navegacion superior-->
            <div class=" text-fuente text-[20px] shadow-lg bg-principal rounded-md px-5 py-2 border-b border-fuente">
                <a href="{{route('personas')}}" class="underline text-blue-500">Personas</a> 
                / 
                <a href="" class="underline text-blue-500">Nueva persona</a>
             </div>

                 <!--Titulo -->
            <div class="mx-[10px] md:mx-[50px]  justify-between mt-[20px]">
            <p class="text-fuente text-[40px] mb-[20px]">NUEVA PERSONA</p>
            <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
            <form wire:submit="save">
                
                 <!--opciones-->
                <div class="mb-[20px]">
                    <button class="btn-primary" type="submit">Aceptar</button>
                    <a href="{{route('personas')}}" class="btn-primary bg-rojo py-4">Cancelar</a>
                </div>

            </div>
        </div>

        <!--Formulario-->
        <div class="h-full  bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
            <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
                <p class="text-fuente text-[20px]">INFORMACIÓN PERSONAL</p>
            </div>
              @csrf
              <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                <!--Primera Columna-->
                  <div>
                      <p class="text-fuente">Nombre(s):</p>
                      <input wire:model="nombre" type="text" class="input-pdv w-full mb-3 text-[15px]" name="nombre" placeholder="nombre(s)" value="{{old('nombre')}}">
                      @error('nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">Apellido Paterno:</p>
                      <input wire:model="apellido_1" type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_1" placeholder="Apellido Paterno" value="{{old('apellido_1')}}" >
                      @error('apellido_1')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">Apellido Materno:</p>
                      <input wire:model="apellido_2" type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_2" placeholder="Apellido Materno" value="{{old('apellido_2')}}" >
                      @error('apellido_2')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">Sexo:</p>
                      <select wire:model="sexo" name="sexo" id="sexo" class="input-pdv w-full mb-3">
                        <option value="" selected >-- SELECCIONAR --</option>
                        <option value="MASCULINO" @if(old('sexo') === 'MASCULINO') selected @endif>MASCULINO</option>
                        <option value="FEMENINO" @if(old('sexo') === 'FEMENINO') selected @endif>FEMENINO</option>
                      </select>
                      @error('sexo')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
                      
                      <p class="text-fuente">Fecha de nacimineto:</p>
                      <input wire:model="fecha_nac" type="date" class="input-pdv w-full mb-3 text-[15px]" name="fecha_nac" placeholder="Fecha de nacimiento" value="{{old('fecha_nac')}}">
                      @error('fecha_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente text-[24px] mb-[10px] mt-[40px]">Lugar de nacimiento</p>
                      <p class="text-fuente">Estado:</p>
                      <select wire:model="estado" name="estado" id="estado" class="input-pdv w-full mb-3 text-[15px]" wire:model="estado" wire:change="ActualizarEstadoNac">
                        <option value="" selected >-- SELECCIONAR --</option>
                        @foreach($entidades as $entidad)
                        <option value="{{ $entidad->name }}"  @if(old('estado') === '{{ $entidad->name }}') selected @endif> {{ $entidad->name }}</option>
                        @endforeach
                        <option value="Otro" @if(old('estado') === 'Otro') selected @endif>Otro</option>
                      </select>
                      @error('estado')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">Municipio:</p>
                      <select wire:model="municipio" name="municipio" id="municipio" class="input-pdv w-full mb-3 text-[15px]" wire:model="municipio">
                        <option value="" selected>-- SELECCIONAR --</option>
                        @foreach($municipiosNac as $municipio)
                        <option value="{{ $municipio->name }}"  @if(old('municipio') === '{{ $municipio->name }}') selected @endif> {{ $municipio->name }}</option>
                        @endforeach
                        <option value="Otro" @if(old('municipio') === 'Otro') selected @endif>Otro</option>
                      </select>
                      @error('municipio')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">Ciudad o localidad:</p>
                      <input wire:model="ciudad_nac" type="text" class="input-pdv w-full mb-3 text-[15px]" name="ciudad_nac" placeholder="Ciudad" value="{{old('ciudad_nac')}}" >
                      @error('ciudad_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                      <p class="text-fuente">País:</p>
                      <select wire:model="pais" name="pais" id="pais" class="input-pdv w-full mb-3">
                        <option value="" selected >-- SELECCIONAR --</option>
                        <option value="Mexico" @if(old('pais') === 'Mexico') selected @endif>México</option>
                        <option value="Estados Unidos" @if(old('pais') === 'Estados Unidos') selected @endif>Estados Unidos</option>
                        <option value="Canada" @if(old('pais') === 'Canada') selected @endif>Canada</option>
                        <option value="Otro" @if(old('pais') === 'Otro') selected @endif>Otro</option>
                      </select>
                      @error('pais')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
                  </div>
                <!--Segunda Columna-->
                  <div>
        
                    <p class="text-fuente">Nacionalidad:</p>
                    <select wire:model="nacionalidad" name="nacionalidad" id="nacionalidad" class="input-pdv w-full mb-3">
                        <option value="" selected >-- SELECCIONAR --</option>
                        <option value="Mexicana" @if(old('nacionalidad') === 'Mexicana') selected @endif>Mexicana</option>
                        <option value="Estadounidense" @if(old('nacionalidad') === 'Estadounidense') selected @endif>Estadounidense</option>
                        <option value="Canadiense" @if(old('nacionalidad') === 'Canadiense') selected @endif>Canadiense</option>
                        <option value="Otro" @if(old('nacionalidad') === 'Otro') selected @endif>Otro</option>
                      </select>
                    @error('nacionalidad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                    <p class="text-fuente">Estado Civil:</p>
                    <select wire:model="estado_civil" class="input-pdv w-full mb-3" name="estado_civil" id="" value="{{old('estado_civil')}}">
                     <option value=""  selected>-- SELECCIONAR --</option>  
                     <option value="SOLTER@" @if(old('estado_civil') === 'SOLTER@') selected @endif>SOLTER@</option>
                     <option value="CASAD@" @if(old('estado_civil') === 'CASAD@') selected @endif>CASAD@</option>
                     <option value="VIUD@" @if(old('estado_civil') === 'VIUD@') selected @endif>VIUD@</option>
                     <option value="SEPARAD@" @if(old('estado_civil') === 'SEPARAD@') selected @endif>SEPARAD@</option>
                     <option value="DIVORCIAD@" @if(old('estado_civil') === 'DIVORCIAD@') selected @endif>DIVORCIAD@</option>
                    </select>
                    @error('estado_civil')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                    <p class="text-fuente">CURP:</p>
                    <input wire:model="curp" type="text" class="input-pdv w-full mb-3 text-[15px]" name="curp" placeholder="CURP" value="{{old('curp')}}">
                    @error('curp')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                    <p class="text-fuente">RFC:</p>
                    <input wire:model="rfc" type="text" class="input-pdv w-full mb-3 text-[15px]" name="rfc" placeholder="RFC" value="{{old('rfc')}}">
                    @error('rfc')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                    <p class="text-fuente">INE:</p>
                    <input wire:model="ine" type="number" class="input-pdv w-full mb-3 text-[15px]" name="ine" placeholder="INE" value="{{old('ine')}}">
                    @error('ine')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                    <p class="text-fuente">Ocupación o Profesión:</p>
                    <input wire:model="ocupacion" type="text" class="input-pdv w-full mb-3 text-[15px]" name="ocupacion" placeholder="Ocupación" value="{{old('ocupacion')}}">
                    @error('ocupacion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                  </div>
                  
              </div>   
        </div>

     <!--DIRECCION-->
     <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
        <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
            <p class="text-fuente text-[20px]">DIRECCIÓN</p>
        </div>
        <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
        <!--Primera Columna-->
            <div>
                <p class="text-fuente">Calle:</p>
                <input wire:model="calle" type="text" class="input-pdv w-full mb-3 text-[15px]" name="calle" placeholder="Calle" value="{{old('calle')}}">
                @error('calle')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Número Interior:</p>
                <input wire:model="numero_interior" type="text" class="input-pdv w-full mb-3 text-[15px]" name="numero_interior" placeholder="Número interior" value="{{old('numero_interior')}}">
                @error('numero_interior')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Número Exterior:</p>
                <input wire:model="numero_exterior" type="text" class="input-pdv w-full mb-3 text-[15px]" name="numero_exterior" placeholder="Número exterior" value="{{old('numero_exterior')}}">
                @error('numero_exterior')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Colonia:</p>
                <input wire:model="colonia_direccion" type="text" class="input-pdv w-full mb-3 text-[15px]" name="colonia_direccion" placeholder="Colonia" value="{{old('colonia_direccion')}}">
                @error('colonia_direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

            </div>
        <!--Segunda Columna-->
            <div>
                <p class="text-fuente">Código Postal:</p>
                <input wire:model="codigo_postal" type="text" class="input-pdv w-full mb-3 text-[15px]" name="codigo_postal" placeholder="Código Postal" value="{{old('codigo_postal')}}">
                @error('codigo_postal')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Estado:</p>
                <select wire:model="estado_direccion" name="estado_direccion" id="estado_direccion" class="input-pdv w-full mb-3 text-[15px]" wire:model="estado_direccion" wire:change="ActualizarEstadoDireccion">
                    <option value="" selected >-- SELECCIONAR --</option>
                    @foreach($entidades as $entidad)
                    <option value="{{ $entidad->name }}"  @if(old('estado') === '{{ $entidad->name }}') selected @endif> {{ $entidad->name }}</option>
                    @endforeach
                    <option value="Otro" @if(old('estado') === 'Otro') selected @endif>Otro</option>
                  </select>
                @error('estado_direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Municipio:</p>
                <select wire:model="municipio_direccion" name="municipio_direccion" id="municipio_direccion" class="input-pdv w-full mb-3 text-[15px]" wire:model="municipio_direccion">
                    <option value="" selected >-- SELECCIONAR --</option>
                    @foreach($municipiosDireccion as $municipio)
                    <option value="{{ $municipio->name }}"  @if(old('municipio_direccion') === '{{ $municipio->name }}') selected @endif> {{ $municipio->name }}</option>
                    @endforeach
                    <option value="Otro" @if(old('municipio_direccion') === 'Otro') selected @endif>Otro</option>
                  </select>
                @error('municipio_direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Ciudad o Localidad:</p>
                <input wire:model="ciudad" type="text" class="input-pdv w-full mb-3 text-[15px]" name="ciudad" placeholder="Ciudad o Localidad" value="{{old('ciudad')}}">
                @error('ciudad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">País:</p>
                <select wire:model="pais_direccion" name="pais_direccion" id="pais_direccion" class="input-pdv w-full mb-3">
                  <option value="" selected >-- SELECCIONAR --</option>
                  <option value="Mexico" @if(old('pais') === 'Mexico') selected @endif>México</option>
                  <option value="Estados Unidos" @if(old('pais') === 'Estados Unidos') selected @endif>Estados Unidos</option>
                  <option value="Canada" @if(old('pais') === 'Canada') selected @endif>Canada</option>
                  <option value="Otro" @if(old('pais') === 'Otro') selected @endif>Otro</option>
                </select>
                @error('pais_direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

            </div>
            
        </div>
    </div>

        <!--CONTACTO-->
        <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
        <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
            <p class="text-fuente text-[20px]">CONTACTO</p>
        </div>
        <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
        <!--Primera Columna-->
            <div>
                <p class="text-fuente">Celular:</p>
                <input wire:model="celular" type="number" class="input-pdv w-full mb-3 text-[15px]" name="celular" placeholder="celular"  value="{{old('celular')}}" >
                @error('celular')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                <p class="text-fuente">Teléfono:</p>
                <input wire:model="telefono" type="number" class="input-pdv w-full mb-3 text-[15px]" name="telefono" placeholder="telefono" value="{{old('telefono')}}" >
                @error('telefono')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

            </div>
        <!--Segunda Columna-->
            <div>
                <p class="text-fuente">Correo Electrónico:</p>
                <input wire:model="correo" type="text" class="input-pdv w-full mb-3 text-[15px]" name="correo" placeholder="nombre(s)" value="{{old('correo')}}">
                @error('correo')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

            </div>
            
        </div>
    </div>


            <!--REFERENCIAS-->
            <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px]">
                <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
                    <p class="text-fuente text-[20px]">REFERENCIAS</p>
                </div>
                <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                <!--Primera Columna-->
                    <div>
                        <p class="text-fuente text-[20px] mb-[10px]">Referencia 1</p>
                        <p class="text-fuente">Nombre(s):</p>
                        <input wire:model="referencia1_nombre" type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_nombre" placeholder="nombre(s)" value="{{old('referencia1_nombre')}}">
                        @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Celular:</p>
                        <input wire:model="referencia1_cel" type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_cel" placeholder="Celular" value="{{old('referencia1_cel')}}">
                        @error('referencia1_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Prentesco:</p>
                        <select wire:model="referencia1_parentesco" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_parentesco" value="{{old('referencia1_parentesco')}}" >
                            <option value="" selected>-- SELECCIONAR --</option>    
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
                        <input wire:model="referencia2_nombre" type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_nombre" placeholder="nombre(s)" value="{{old('referencia2_nombre')}}">
                        @error('referencia2_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Celular:</p>
                        <input wire:model="referencia2_cel" type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_cel" placeholder="Celular" value="{{old('referencia2_cel')}}">
                        @error('referencia2_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Prentesco:</p>
                        <select wire:model="referencia2_parentesco" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_parentesco">
                            <option value=""  selected>-- SELECCIONAR --</option>    
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
</div>
