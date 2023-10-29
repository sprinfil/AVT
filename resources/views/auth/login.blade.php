@extends('layouts.principal')

@section('titulo')
    Iniciar Sesi&oacute;n
@endsection

@section('contenido')
<div class="h-full md:flex md:justify-center md:gap-10 md:items-center p-2">
    <div class="md:w-4/12 bg-login-fondo p-6 rounded-lg shadow-xl">

        <div class="flex justify-center mb-10">
            <svg class="w-[50%] text-terciario" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
          
        
        <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf     
            
            @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">       
                    {{ session('mensaje') }}
                </p>
            @endif

            <!-- INPUT USERNAME-->
            <div class="justify-center mb-5">
                <div class="w-full flex justify-center">
                    <input 
                    id="username"
                    name="username"
                    type="username"
                    placeholder="Usuario"
                    class="border bg-fuente-botones p-3 w-[70%] rounded-lg  @error('username')
                    border-red-500
                    @enderror"
                    value="{{old('username')}}" 
                />
                </div>
                <div class="w-full flex justify-center">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 w-[70%]" >{{$message}}</p>
                    @enderror
                </div>

            </div>
            
            <!-- INPUT PASSWORD-->
            <div class="justify-center">
                <div class="w-full flex justify-center">
                    <input 
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Contraseña"
                    class="border bg-fuente-botones p-3 w-[70%] rounded-lg @error('password')
                    border-red-500
                    @enderror"
                />
                </div>
                <div class="w-full flex justify-center">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 w-[70%]">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-center">
                <input 
                    type="submit"
                    value="Ingresar"
                    class=" bg-negro-fondo text-fuente-botones transition-colors cursor-pointer p-3 rounded-lg mt-5 w-[50%]"
                />
            </div>
        </form>
    </div>
</div>
@endsection