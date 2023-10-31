<div>
   @if($archivo!=null)
    <div class="{{$esconder}}">

        <!--///////Div para agregar transparencia//////-->
            <div class="bg-black w-screen h-screen z-[10] absolute top-0 left-0 opacity-60 "></div>
    
            <!--///////Div contenedor para centrar el modal//////-->
            <div class="w-screen h-screen z-[30] absolute top-0 left-0 items-center justify-center flex transform scale-100 transition-transform ease-in duration-300" >
        
                   <!--///////Contenedor del modal//////-->
                <div class="bg-negro-menu rounded-md overflow-auto md:w-[800px] w-full md:h-auto h-auto">
                    <div class=" text-fuente text-[20px] shadow-lg bg-principal rounded-md px-5 py-2 border-b border-fuente flex justify-center">
                        <p class="text-fuente text-[20px]">ADVERTENCIA</p>
                     </div>
    
                      <!--///////Icono del modal (contenedor superior)//////-->
                      <div class="w-full h-[200px] flex items-center justify-center">
                        <p class="text-fuente text-[20px]">¿Seguro que deseas eliminar el archivo <span class="text-fuente text-[20px] underline">{{$archivo->nombre}}</span>?</p>
                      </div>
                        
                        <!--///////Botones (contenedor inferior)//////-->
                        <div class="bg-terciario w-full h-[100px] flex justify-end py-5">
                            <p class="btn-primary right-0 mr-5 bg-rojo items-center flex cursor-pointer" wire:click="salir">Cancelar</p>
                            <button class="btn-primary right-0 mr-5" wire:click="save"> Aceptar </button>
                        </div>

                </div>
            </div>
        </div>
    @endif
</div>