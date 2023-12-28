<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>Mantenimientos</title>
        <style>
           
           table {
                margin: 1em;
                padding: 0.2em;
            }

            .encabezado {
                text-align: center;
                background-color: #F58585;
            }

            .falla {
                text-align: center;
                background-color: #B2F6D7;
            }

            .mantenimiento {
                text-align: center;
                background-color: #F58585;
            }

            .funcionamiento {
                text-align: center;
                background-color: #F58585;
            }
            
            tr td:first-child {
                width: 100%;
                background-color: #F1EDA5;
            }

        </style>
    </head>
    <body class="">
        <header class="encabezado">
            <h1 class="">
                HIELO Y FRIGORIFICO DE COATZACOALCOS S.A.
            </h1>
            <h3> REPORTE DE SERVICIO</h3>
        </header>
        <main class="">
            <h2 class="">
                @yield('titulo')
            </h2>

            <div class="falla">
                <table class="">                           
                    <tbody>
                        <tr class="">
                            <td class=""></td>
                            <td class="">REPORTE DE FALLA DEL CONSERVADOR</td>
                            <td class=""></td>
                        </tr>

                        <tr class="">
                            <td class="">Fecha</td>
                            <td class="">Hora</td>
                            <td class="">Cliente</td>
                        </tr>

                        <tr class="">
                            <td class="">Reporta</td>
                            <td class="">Capacidad de conservador</td>
                        </tr>

                        <tr class="">
                            <td class="">Nombre y firma de quien reporta</td>
                            <td class="">Nombre y firma de quien recibe reporte</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mantenimiento">
                <table class="">                
                    <tbody>
                        <tr class="">
                            <td class="">Id</td>
                            <td class=""># serie</td>
                            <td class="">Producto</td>
                            <td class="">Marca</td>
                            <td class="">Fecha</td>
                        </tr>
            
                        <tr class="">
                            <td class="">{{$maintenance->id}}</td>
                            <td class="">{{$product->serial_number}}</td>
                            <td class="">{{$product->description}}</td>
                            <td class="">{{$product->getProductWithBrand->description}}</td>
                            <td class="">{{ $maintenance->created_at->format('Y-m-d') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="funcionamiento">
                <table class="">
                    <tr class="">
                        <td class="">FUNCIONAMIENTO</td>
                    </tr>
            
                    <tbody>
                        <tr class="">
                            <td class="">{{$maintenance->id}}</td>
                            <td class="">{{$product->serial_number}}</td>
                            <td class="">{{$product->description}}</td>
                            <td class="">{{$product->getProductWithBrand->description}}</td>
                            <td class="">{{ $maintenance->created_at->format('Y-m-d') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <footer class="">
            <h1>Hielitos - Todos los derechos reservados {{ now()->year }} </h1>
        </footer>
    </body>
</html>