<!--Seccion menu-->
<nav class="close-nav text-gray-300 w-[250px] ease-out duration-500 bg-negro-menu h-screen shadow-lg" id="menu" >
    <div class="container px-3">   <!--seccion superior-->
        <div class="flex justify-between h-full pt-3 ">
            <div class="">
                       <!--Texto Superior-->
                 <p class=" font-bold texto ocultar-texto text-[20px] text-fuente">MENU</p>
                 <p class="text-[20px] texto mt-2 ocultar-texto text-fuente">AVT</p>
                 @if (session()->has('usuario'))
                 <p class="text-[17px] texto mt-2 ocultar-texto">{{session('usuario')->nombre}} - {{session('usuario')->Tipo}}</p>
                 @endif
           </div>
  
       </div>
       <br>
      <hr class="bg-fuente h-[3px]">
  
  
    <div class="overflow-auto no-scrollbar pt-3 mt-2" id="contenedor-botones">         <!--div contenedor-->
      <div class="mt-10"> <!--seccion botones-->
          <ul class="mt-6">
  


             <!--///////Home//////-->
                    <a href="{{ route('home') }}">
                      <div class=" my-1 p-3 rounded-md flex cursor-pointer active:bg-active bg-principal ease-out duration-500 h-[65px] shadow-md" onclick="">
                          <!--Icono-->
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>                          
                          <!--Texto-->
                    <li class="text-center font-400 ml-[30px] texto ocultar-texto text-[20px] h-[30px] mt-[5px] text-fuente-botones"><span>Home</span></li>
                      </div>  
                    </a>



                    <!--///////Personas//////-->
                    <a href="{{route('personas')}}">
                      <div class=" my-1 p-3 rounded-md flex cursor-pointer active:bg-active bg-principal ease-out duration-500 h-[65px] shadow-md" onclick="">
                        <!--Icono-->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>    
                        <!--Texto-->
                  <li class="text-center font-400 ml-[30px] texto ocultar-texto text-[20px] h-[30px] mt-[5px] text-fuente-botones"><span>Personas</span></li>
                    </div> 
                    </a> 


          <!--///////Cerrar Sesion//////-->
          <form method="POST" action="">
            @csrf
            <button type="submit" class="w-full mt-9 p-3 rounded-md flex cursor-pointer active:bg-active bg-rojo ease-out duration-500 h-[65px] shadow-md">
                <!-- Icono -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                <!-- Texto -->
                <li class="text-center font-400 ml-[30px] texto ocultar-texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                    <span>Salir</span>
                </li>
            </button>
        </form>
        

     </div>   
      <!--Fin de lista-->
      </ul>
    </div>
  </nav>
  