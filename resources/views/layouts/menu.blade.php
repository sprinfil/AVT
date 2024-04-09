<!--Seccion menu-->
<nav class=" text-gray-300 min-[1180px]:w-[250px] w-screen ease-out duration-500 bg-negro-menu h-screen shadow-lg  "
    id="menu">
    <div class="px-3"> <!--seccion superior-->
        <div class="flex justify-between h-full pt-3">
            <div class="">
                <!--Texto Superior-->
                <p class="texto text-[20px] text-fuente">MENU</p>

                <!--Usuario-->
                <div class="md:hidden justify-end flex items-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9 text-fuente rounded-md px-1 my-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="text-fuente">{{ auth()->user()->name }}</p>
                </div>

            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" id="boton-toggle-menu" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-9 h-auto px-3 cursor-pointer active:bg-active bg-principal border border-solid border-principal text-fuente-botones ease-out duration-500 p-1 min-w-[60px] shadow-md ocultar-boton-responsive"
                    onclick="togglemenu()">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
            </div>

        </div>
        <br>
        <hr class="bg-fuente h-[1px]">


        <div class="overflow-auto no-scrollbar pt-3 mt-2" id="contenedor-botones"> <!--div contenedor-->
            <div class="mt-10"> <!--seccion botones-->
                <ul class="mt-6 relative">



                    <!--///////Home//////-->
                    <a href="{{ route('home') }}">
                        <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                            onclick="">
                            <!--Icono-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <!--Texto-->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Home</span>
                            </li>
                        </div>
                    </a>

                    <!--///////Zonas//////-->
                    <a href="{{ route('zonas.index') }}">
                        <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                            onclick="">
                            <!--Icono-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <!--Texto-->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Zonas</span>
                            </li>
                        </div>
                    </a>

                    <!--///////Personas//////-->
                    <a href="{{ route('personas') }}">
                        <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                            onclick="">
                            <!--Icono-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <!--Texto-->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Personas</span>
                            </li>
                        </div>
                    </a>

                     <!--///////Ventas//////-->
                     <a href="{{ route('ventas') }}">
                        <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                            onclick="">
                            <!--Icono-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                              </svg>
                              
                            <!--Texto-->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Ventas</span>
                            </li>
                        </div>
                    </a>

                    <!--///////Pagos//////-->
                     <a href="{{ route('pagos') }}">
                        <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                            onclick="">
                            <!--Icono-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                              
                              
                            <!--Texto-->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Pagos</span>
                            </li>
                        </div>
                    </a>

                    <!--///////REPORTES//////-->
                    <div class=" my-1 p-3 rounded-md flex cursor-pointer active:bg-active bg-principal ease-out duration-500 h-[65px]"
                        onclick="toggleSubMenu('Reportes')">
                        <!--Icono-->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>


                        <!--Texto-->
                        <li
                            class="text-center font-400 ml-[30px] texto  text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                            <span>Reportes</span>
                        </li>
                    </div>
                    <!--///////LIsta//////-->
                    <div class="submenu my-3 ease-out duration-500 ocultar" id="Reportes">
                        <ul class="">
                            <a href="{{ route('reportes.pagos') }}">
                                <div
                                    class="hover:bg-principal active:bg-active hover:text-fuente-botones ease-out duration-500 rounded-sm py-2">
                                    <li class="texto  ml-[10px]"><span>Reporte de Pagos</span></li>
                                </div>
                            </a>
                        </ul>
                    </div>


                    @admin
                        <!--///////Usuarios//////-->
                        <a href="{{ route('usuarios') }}">
                            <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                                onclick="">
                                <!--Icono-->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <!--Texto-->
                                <li
                                    class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                    <span>Usuarios</span>
                                </li>
                            </div>
                        </a>

                        <!--///////Configuracion//////-->
                        <a href="{{ route('configuracion') }}">
                            <div class=" my-1 p-3 rounded-md flex btn-primary h-[65px]"
                                onclick="">
                                <!--Icono-->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                                </svg>
                                <!--Texto-->
                                <li
                                    class="text-center font-400 ml-[30px] texto text-[19px] h-[30px] mt-[5px] text-fuente-botones">
                                    <span>Configuración</span>
                                </li>
                            </div>
                        </a>
                    @endadmin



                    <!--///////Cerrar Sesion//////-->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full mt-9 p-3 rounded-md flex cursor-pointer active:bg-active bg-rojo ease-out duration-500 h-[65px] shadow-md">
                            <!-- Icono -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente-botones">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            <!-- Texto -->
                            <li
                                class="text-center font-400 ml-[30px] texto text-[20px] h-[30px] mt-[5px] text-fuente-botones">
                                <span>Salir</span>
                            </li>
                        </button>
                    </form>

                    <!--Fin de lista-->


                    <!--Logo SurCode-->
                    <div class="w-full h-[80px]">
                        <div class="w-full absolute bottom-0 flex items-end justify-center">
                            <div>
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    </svg>
                                </div>
                                <p class="text-fuente">Surcode®</p>
                            </div>


                </ul>

            </div>



        </div>

    </div>

</nav>
