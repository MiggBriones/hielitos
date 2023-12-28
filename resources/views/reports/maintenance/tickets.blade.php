<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>Mantenimientos</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <h1 class="text-3xl font-black">
                Listado de mantenimientos
            </h1>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            <div class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
                <div class="md:flex md:justify-center md:gap-10 md:items-center">
                    Hola Mundo desde plantilla blade.
                </div>
            </div>
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            <h1>Hielitos - Todos los derechos reservados {{ now()->year }} </h1>
        </footer>
    </body>
</html>