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
                <div class="grid place-items-center">    
                    <table class="text-sm text-left text-gray-500 dark:text-gray-400">                
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-4">Id</th>
                                <th class="px-6 py-4"># serie</th>
                                <th class="px-6 py-4">Producto</th>
                                <th class="px-6 py-4">Marca</th>
                                <th class="px-6 py-4">Fecha</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-3">{{$maintenance->id}}</td>
                                <td class="px-6 py-3">{{$product->serial_number}}</td>
                                <td class="px-6 py-3">{{$product->description}}</td>
                                <td class="px-6 py-3">{{$product->getProductWithBrand->description}}</td>
                                <td class="px-6 py-3">{{ $maintenance->created_at->format('Y-m-d') }}</td>
                            </tr>
                        </tbody>
                
                    </table>
                </div>
            </div>
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            <h1>Hielitos - Todos los derechos reservados {{ now()->year }} </h1>
        </footer>
    </body>
</html>