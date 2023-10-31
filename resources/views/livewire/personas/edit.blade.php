@section('css')
    @vite('resources/css/dropzone.css')
@endsection

<div class="mx-2 md:mx-[60px] mt-[20px]">
      <!--Cabecera-->
      <div class=" w-full h-full bg-terciario shadow-lg rounded-md overflow-x-hidden ">
             <!--navegacion superior-->
        <div class=" text-fuente text-[20px] shadow-lg bg-principal rounded-md px-5 py-2 border-b border-fuente">
            <a href="{{route('personas')}}" class="underline text-blue-500">Personas</a> 
            / 
            <a href="" class="underline text-blue-500">{{$persona->nombre}}</a>
          </div>

             <!--Titulo-->
        <div class="mx-[10px] md:mx-[50px]  justify-between  mt-[20px]">
          <p class="text-fuente text-[40px] mb-[20px]">{{$persona->nombreCompleto()}}</p>
          <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>

          <!--Opciones-->
          <div class="mb-[20px]">
            <form wire:submit="save">
                <button class="btn-primary {{ $toggleEditar == true ? 'dark:bg-green-500 text-black' : 'dark:bg-principal' }}" wire:click = "editar" type="{{ $toggleEditar == true ? 'submit' : 'button' }}">{{$lblboton}}</button>
          </div>
        </div>
      </div>

                <!--Contenedor-->
            <div class="h-full  bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px] ">
                <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente">
                    <p class="text-fuente text-[20px]">INFORMACIÓN DE LA PERSONA</p>
                </div>
                  @csrf
                  <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                    <!--Primera Columna-->
                      <div>
                          <p class="text-fuente">Nombre(s):</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nombre" placeholder="nombre(s)" value="{{old('nombre')}}" wire:model="nombre" @if(!$toggleEditar) disabled @endif>
                          @error('nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Paterno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_1" placeholder="Apellido Paterno" value="{{old('apellido_1')}}" wire:model="apellido_1" @if(!$toggleEditar) disabled @endif>
                          @error('apellido_1')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Apellido Materno:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="apellido_2" placeholder="Apellido Materno" value="{{old('apellido_2')}}" wire:model="apellido_2" @if(!$toggleEditar) disabled @endif>
                          @error('apellido_2')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Estado:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="estado" placeholder="Estado" value="{{old('estado')}}" wire:model="estado" @if(!$toggleEditar) disabled @endif>
                          @error('estado')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Ciudad:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ciudad" placeholder="Ciudad" value="{{old('ciudad')}}" wire:model="ciudad" @if(!$toggleEditar) disabled @endif>
                          @error('ciudad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Celular:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="celular" placeholder="celular"  value="{{old('celular')}}" wire:model="celular" @if(!$toggleEditar) disabled @endif>
                          @error('celular')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Teléfono:</p>
                          <input type="numeric" class="input-pdv w-full mb-3 text-[15px]" name="telefono" placeholder="telefono" value="{{old('telefono')}}" wire:model="telefono" @if(!$toggleEditar) disabled @endif>
                          @error('telefono')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Lugar de nacimiento:</p>
                          <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="lugar_nac" placeholder="Lugar de nacimiento" value="{{old('lugar_nac')}}" wire:model="lugar_nac" @if(!$toggleEditar) disabled @endif> 
                          @error('lugar_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                          <p class="text-fuente">Fecha de nacimineto:</p>
                          <input type="date" class="input-pdv w-full mb-3 text-[15px]" name="fecha_nac" placeholder="Fecha de nacimiento" value="{{old('fecha_nac')}}" wire:model="fecha_nac" @if(!$toggleEditar) disabled @endif>
                          @error('fecha_nac')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
            
                      </div>
                    <!--Segunda Columna-->
                      <div>
            
                        <p class="text-fuente">Nacionalidad:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="nacionalidad" placeholder="Nacionalidad" value="{{old('nacionalidad')}}" wire:model="nacionalidad" @if(!$toggleEditar) disabled @endif>
                        @error('nacionalidad')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Colonia:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="colonia" placeholder="Colonia" value="{{old('colonia')}}" wire:model="colonia" @if(!$toggleEditar) disabled @endif>
                        @error('colonia')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Dirección:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="direccion" placeholder="Dirección" value="{{old('direccion')}}" wire:model="direccion" @if(!$toggleEditar) disabled @endif>
                        @error('direccion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">RFC:</p>
                        <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="rfc" placeholder="RFC" value="{{old('rfc')}}" wire:model="rfc" @if(!$toggleEditar) disabled @endif>
                        @error('rfc')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                        <p class="text-fuente">Estado Civil:</p>
                         <select class="input-pdv w-full mb-3" name="estado_civil" id="" value="{{old('estado_civil')}}" wire:model="estado_civil" @if(!$toggleEditar) disabled @endif>
                          <option value="" disabled selected>-- SELECCIONAR --</option>  
                          <option value="SOLTER@" @if(old('estado_civil') === 'SOLTER@') selected @endif>SOLTER@</option>
                          <option value="CASAD@" @if(old('estado_civil') === 'CASAD@') selected @endif>CASAD@</option>
                          <option value="VIUD@" @if(old('estado_civil') === 'VIUD@') selected @endif>VIUD@</option>
                          <option value="SEPARAD@" @if(old('estado_civil') === 'SEPARAD@') selected @endif>SEPARAD@</option>
                          <option value="DIVORCIAD@" @if(old('estado_civil') === 'DIVORCIAD@') selected @endif>DIVORCIAD@</option>
                         </select>
                         @error('estado_civil')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">CURP:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="curp" placeholder="CURP" value="{{old('curp')}}" wire:model="curp" @if(!$toggleEditar) disabled @endif>
                         @error('curp')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">INE:</p>
                         <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="ine" placeholder="INE" value="{{old('ine')}}" wire:model="ine" @if(!$toggleEditar) disabled @endif>
                         @error('ine')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Ocupación:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="ocupacion" placeholder="Ocupación" value="{{old('ocupacion')}}" wire:model="ocupacion" @if(!$toggleEditar) disabled @endif>
                         @error('ocupacion')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                         <p class="text-fuente">Otros:</p>
                         <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="otros" placeholder="Otros" value="{{old('otros')}}" wire:model="otros" @if(!$toggleEditar) disabled @endif>
                         @error('otros')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror
                      </div>
                      
                  </div>

          
    </div>

                <!--Contenedor-->
                <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px] ">
                    <div class="w-full h-[50px] bg-principal rounded-md  px-7 flex justify-center items-center mt-0  border-b border-fuente" >
                        <p class="text-fuente text-[20px]">REFERENCIAS</p>
                    </div>
                    <div class=" px-7 py-7 gap-x-20 grid grid-cols-1 md:grid-cols-2">
                    <!--Primera Columna-->
                        <div>
                            <p class="text-fuente text-[20px] mb-[10px]">Referencia 1</p>
                            <p class="text-fuente">Nombre(s):</p>
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_nombre" placeholder="nombre(s)" value="{{old('referencia1_nombre')}}" wire:model="referencia1_nombre" @if(!$toggleEditar) disabled @endif>
                            @error('referencia1_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia1_cel" placeholder="Celular" value="{{old('referencia1_cel')}}" wire:model="referencia1_cel" @if(!$toggleEditar) disabled @endif>
                            @error('referencia1_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia1_parentesco" wire:model="referencia1_parentesco" @if(!$toggleEditar) disabled @endif>
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
                            <input type="text" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_nombre" placeholder="nombre(s)" value="{{old('referencia2_nombre')}}" wire:model="referencia2_nombre" @if(!$toggleEditar) disabled @endif>
                            @error('referencia2_nombre')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Celular:</p>
                            <input type="number" class="input-pdv w-full mb-3 text-[15px]" name="referencia2_cel" placeholder="Celular" value="{{old('referencia2_cel')}}" wire:model="referencia2_cel" @if(!$toggleEditar) disabled @endif>
                            @error('referencia2_cel')<div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </div>@enderror

                            <p class="text-fuente">Prentesco:</p>
                            <select class="input-pdv w-full mb-3 text-[15px]" name="referencia2_parentesco" wire:model="referencia2_parentesco" @if(!$toggleEditar) disabled @endif>
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

              <!--Contenedor-->
              <div class="h-full bg-terciario shadow-lg pb-[20px] mt-[20px] rounded-lg mb-[20px] ">
                <div class="w-full h-[50px] bg-principal rounded-md mt-0 flex justify-center items-center  border-b border-fuente">
                    <p class="text-fuente text-[20px]">Documentación</p>
                </div>
                    <button class="btn-primary mt-[20px] cursor-pointer ml-[30px] mb-[30px] {{ $esconder_dropzone == "" ? 'dark:bg-green-500 text-black' : 'dark:bg-principal' }}" wire:click="toggleArchivos" id="btnAceptar">{{$boton_documentacion}}</button>
                    <div class="border-2 border-sky-500 border-dashed rounded-[30px] my-[20px] mx-[30px] {{$esconder_dropzone}}">
                        <form action="{{route('personas_archivos_store',['persona_id'=>$persona->id])}}"
                            class="dropzone  rounded-[30px] "
                            id="my-awesome-dropzone"
                            >
                        </form>
                    </div>
                <div class=" mt-[1px] overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-md">
                        <thead class="text-xs text-fuente uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-fuente text-[13px]">
                                    Nombre del archivo
                                </th>
                                <th scope="col" class="px-6 py-3 text-fuente min-w-[200px] ">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($archivos as $archivo)
                          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{ $persona->id % 2 == 0 ? 'dark:bg-gray-800' : '' }} w-full">
                             <th scope="row" class="cursor-pointer px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:bg-gray-500 dark:text-fuente border border-solid border-gray-700" wire:click="verArchivo({{'"'. $archivo->url.'"'}})">
                                {{$archivo->nombre}}
                              </th>
                              
                              <td class="py-4 px-6 dark:text-fuente cursor-pointer text-left grid grid-cols-1 md:grid-cols-2 text-[16px] " >
                                <button class="font-medium dark:text-rojo hover:underline" wire:click="eliminar_alert({{'"'. $archivo->url.'"'}},{{$archivo->id}})">Eliminar</button>
                                <button class="font-medium dark:text-blue-600 hover:underline"  wire:click="editar_archivo({{$archivo->id}})">Editar</button>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>

@section('js')

<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    let nombres = [];
    const btnAceptar = $("#btnAceptar");

    Dropzone.options.myAwesomeDropzone = { 
      headers:{
        'X-CSRF-TOKEN' : "{{csrf_token()}}"
      },
    }

    Dropzone.autoDiscover = false; // Para evitar que Dropzone busque automáticamente elementos con la clase "dropzone".
        var miDropzone = new Dropzone("#my-awesome-dropzone", {

     

        success: function(file, response) {
        console.log("Archivo subido con éxito:", file);
        console.log("Respuesta del servidor:", response);
        nombres.push(file.name);
        console.log(nombres);
      
        }
  });

  btnAceptar.click(function(){
          @this.dispatch('actualizarDocumentos', [nombres] )
    })
</script>

@endsection
