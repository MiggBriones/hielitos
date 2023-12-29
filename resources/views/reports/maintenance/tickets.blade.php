<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>Mantenimientos</title>
        <style>
           
           table {
                background-color: green;
                margin: 0;
                padding: 0.2em;
                width: 100%;
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
                background-color: #F1EDA5;
                margin: 0 auto;
                text-align: center;
            }

            .footer {
                position:absolute;
                bottom:0;
                width:100%;
                text-align: center;
            }

            .alineacion {
                text-align: left !important;
                background-color: pink;
                border: 1px solid black;                
            }

            .espacioButtom {
                padding-bottom: 2em;
            }
            
            .testElement {
                text-align: left !important;
                background-color: pink;
                border: 1px solid black;
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
                            <td class="" colspan="8">REPORTE DE FALLA DEL CONSERVADOR</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="3">Fecha:</td>
                            <td class="" colspan="2">Hora:</td>
                            <td class="" colspan="3">Cliente: {{ $client->name ." ". $client->last_name }} </td>
                        </tr> 

                        <tr class="">
                            <td class="alineacion" colspan="3">Reporta:</td>
                            <td class="alineacion" colspan="3">Capacidad de conservador:</td>
                        </tr>

                        <tr>
                            <td class="alineacion espacioButtom" colspan="3">Nombre y firma de quien reporta:</td>
                            <td class="alineacion espacioButtom" colspan="3">Nombre y firma de quien recibe reporte:</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mantenimiento">
                <table class="">                
                    <tbody>
                        <tr class="">
                            <td class="" colspan="7">REPORTE DE MANTENIMIENTO DEL CONSERVADOR</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="3">Fecha: {{ $maintenance->created_at->format('Y-m-d') }}</td>
                            <td class="" colspan="2">Lugar:</td>
                            <td class="" colspan="1">Hora inicial:</td>
                            <td class="" colspan="1">Hora final:</td>
                        </tr> 

                        <tr class="">
                            <td class="alineacion" colspan="3">Modelo:</td>
                            <td class="alineacion" colspan="2">Capacidad:</td>
                            <td class="alineacion" colspan="3">No. Serie:</td>
                        </tr>

                        <tr>
                            <td class="alineacion espacioButtom" colspan="3">Nombre o razon social:</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="funcionamiento">
                <table class="">            
                    <tbody>
                        <tr class="">
                            <td class="" colspan="20">FUNCIONAMIENTO DE PARTES</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Partes</td>
                            <td class="alineacion" colspan="1">Capacidad</td>
                            <td class="alineacion" colspan="1">Cambio</td>
                            <td class="alineacion" colspan="1">Funciona</td>
                            <td class="alineacion" colspan="1">Para y arranca</td>
                            <td class="alineacion" colspan="1">Ruido normal</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Compresor</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Micromotor</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Relay</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Termico</td>
                        </tr>
   
                        <tr class="">
                            <td class="alineacion" colspan="15">Capacitor</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Termostato</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Refrigerante</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Calcomanias/Logotipo</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Refacciones utilizadas</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Limpieza del conservador</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Condensador</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Puerta</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Trabajo realizado</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="15">Observaciones</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </main>
        <footer class="footer">
            <h2>Hielitos - Todos los derechos reservados {{ now()->year }} </h2>
        </footer>
    </body>
</html>