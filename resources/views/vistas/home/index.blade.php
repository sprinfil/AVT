@extends('layouts.principal')

@section('titulo')
    Home
@endsection

@section('contenido')
    <div class="mx-2 md:mx-[60px] mt-[20px] mb-[80px]">
        <!--Cabecera-->
        <div class=" w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden">
            <div class="mx-[10px] md:mx-[50px]  justify-between">
                <p class="text-fuente text-[40px] mb-[20px]">HOME</p>
            </div>
        </div>

        <div class="mt-[25px] grid md:grid-cols-4 grid-cols-1 gap-4">
            <a href="{{ route('personas') }}">
                <div
                    class="w-full h-[140px] duration-300 ease-in-out bg-principal  hover:bg-[#0D2536]  shadow-lg rounded-md overflow-x-hidden grid grid-rows-2 justify-center items-center cursor-pointer  px-4">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="h-20 text-fuente-botones">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    </div>
    
                    <div class="text-center">
                        <p class="text-fuente-botones text-[20px] mt-[20px]">Personas</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('ventas') }}">
                <div
                    class="w-full h-[140px] duration-300 ease-in-out bg-principal  hover:bg-[#0D2536]  shadow-lg rounded-md overflow-x-hidden grid grid-rows-2 justify-center items-center cursor-pointer  px-4">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-20 text-fuente-botones">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                    </div>
    
                    <div class="text-center">
                        <p class="text-fuente-botones text-[20px] mt-[20px]">Ventas</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('pagos') }}">
                <div
                    class="w-full h-[140px] duration-300 ease-in-out bg-principal  hover:bg-[#0D2536]  shadow-lg rounded-md overflow-x-hidden grid grid-rows-2 justify-center items-center cursor-pointer  px-4">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-20 text-fuente-botones">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>                          
                    </div>
    
                    <div class="text-center">
                        <p class="text-fuente-botones text-[20px] mt-[20px]">Pagos</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('zonas.index') }}">
                <div
                    class="w-full h-[140px] duration-300 ease-in-out bg-principal  hover:bg-[#0D2536]  shadow-lg rounded-md overflow-x-hidden grid grid-rows-2 justify-center items-center cursor-pointer  px-4">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="h-20 text-fuente-botones">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    </div>
    
                    <div class="text-center">
                        <p class="text-fuente-botones text-[20px] mt-[20px]">Zonas</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('usuarios') }}">
                <div
                    class="w-full h-[140px] duration-300 ease-in-out bg-principal  hover:bg-[#0D2536]  shadow-lg rounded-md overflow-x-hidden grid grid-rows-2 justify-center items-center cursor-pointer  px-4">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-20 text-fuente-botones">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                    </div>
    
                    <div class="text-center">
                        <p class="text-fuente-botones text-[20px] mt-[20px]">Usuarios</p>
                    </div>
                </div>
            </a>
        </div>
           <!--CITAS-->

    </div>
@endsection