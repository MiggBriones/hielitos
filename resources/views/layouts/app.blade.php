<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <!-- <link href="css/app.css" rel="stylesheet"> -->
        <title>Hielitos - @yield('titulo')</title>
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-container">
                @guest
                    <h1 class="text-3xl font-black">
                        Hielitos
                    </h1>
                @endguest
                
                @auth
                    <nav class="text-3xl font-black">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">
                            Crear cuenta
                        </a>
                        <a class="font-bold uppercase text-gray-600 text-sm ml-5" href="{{ route('client') }}">
                            Clientes
                        </a>
                        <a class="font-bold uppercase text-gray-600 text-sm ml-5" href="{{ route('product') }}">
                            Productos
                        </a>
                        <a class="font-bold uppercase text-gray-600 text-sm ml-5" href="{{ route('maintenance') }}">
                            Mantenimiento
                        </a>
                    </nav>    

                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-gray-600 text-sm" href="#">
                            Hola:
                            <span class="font-normal">
                                {{ auth()->user()->username }}
                            </span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar sesión
                            </button>
                        </form>
                    </nav>

                @endauth

                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href=" {{ route('login') }} ">
                            Login
                        </a>
                    </nav>
                @endguest

            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            <div class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
                @yield('contenido')
            </div>
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            <h1>Hielitos - Todos los derechos reservados {{ now()->year }} </h1>
        </footer>
    </body>
</html>