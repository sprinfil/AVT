<!--Boton Para desplegar el menu-->
<div class="bg-terciario flex overflow-x-hidden w-full shadow-md text-center items-center justify-center border-b border-fuente">

    <svg xmlns="http://www.w3.org/2000/svg" id="boton-toggle-menu" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-auto px-3 cursor-pointer active:bg-active bg-principal border border-solid border-principal text-fuente-botones ease-out duration-500 p-1 min-w-[60px] shadow-md" onclick="togglemenu()">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>

    <!--Home-->
    <a href="{{ route('home') }}">
        <div class="flex  text-black ml-[10px] bg-amber-500 hover:bg-amber-600 duration-200 ease-in px-3 py-1 rounded-md cursor-pointer shadow-md my-1 items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>   
            <p class="ml-[5px]">HOME</p>
        </div>

    </a>
 
    <!--NOMBRE DEL SISTEMA-->
    <div class = "w-full text-right hidden md:block">
        <p class="text-fuente text-[20px]">AVT</p>
    </div>
      
    <!--Usuario-->
    <div class=" justify-end flex mr-[20px] items-center w-full">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class=" mr-[10px] underline text-red-500 hidden md:block hover:text-red-400 ease-out duration-150"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
            </svg>
            </button>
        </form>
        <p class="text-fuente hidden md:block">{{ auth()->user()->name }}</p>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-fuente ml-[10px] rounded-md px-1 my-1 hidden md:block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>  
    </div>

</div> 
