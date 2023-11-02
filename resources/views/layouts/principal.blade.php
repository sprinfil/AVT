<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Importaciones (css y js)-->
    @section('importaciones')
        @include('layouts.importaciones')
    @show

    @livewireStyles
    <title>AVT - @yield('titulo')</title>
    @yield('css')
</head>
<body class="font-Poppins flex overflow-auto">

    @auth
        <!--Animacion de carga-->
        @section('loader')
            @include('layouts.loader')
        @show

        <!--Menu-->
        @section('menu')
            @include('layouts.menu')
        @show
    @endauth

    
    <!--Main-->
    <main class="fondo bg-negro-fondo ease-out duration-100 h-screen main-cerrado overflow-auto overflow-x-hidden no-scrollbar" id="main" >                

        @auth
            <!--Iconos de acceso rapido-->
            @section('acceso-rapido')
                @include('layouts.acceso-rapido')
            @show
        @endauth

          
            <!--Seccion del contenido-->
            @section('contenido')
            @show
            
    </main>
    @livewireScripts
    @yield('js')
</body>
</html>