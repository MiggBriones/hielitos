<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>Mantenimientos</title>
        <style>
           body {
                font-family: sans-serif;
           }

           table {
                /*background-color: green; */
                /*
                margin: 0;
                padding: 0.2em;
                */
                width: 100%;
            }

            .encabezado {
                text-align: center;
                /*background-color: #F58585; */
            }

            .falla {
                text-align: center;
                /*background-color: #B2F6D7; */
            }

            .mantenimiento {
                text-align: center;
                /*background-color: #F58585; */
            }

            .funcionamiento {
                text-align: center;
                /*background-color: #F58585; */
            }
            
            tr td:first-child {
                /*background-color: #F1EDA5; */
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
                /* Testing purpose */
                /*background-color: pink; */
                border: 1px solid black;
            }

            .espacioButtom {
                padding-bottom: 1em;
            }
            
            .testElement {
                text-align: left !important;
                /*background-color: pink; */
                border: 1px solid black;
            }

        </style>
    </head>
    <body class="">
        <header class="encabezado">
            <h2 class="">
                HIELO Y FRIGORIFICO DE COATZACOALCOS S.A.
            </h2>
            <h3> REPORTE DE SERVICIO</h3>
        </header>
        <main class="">
            <div class="falla">
                <table class="">                           
                    <tbody>
                        <tr class="">
                            <td class="" colspan="8">REPORTE DE FALLA DEL CONSERVADOR</td>
                        </tr>

                        <tr class="">
                            <td class="alineacion" colspan="3">Fecha:</td>
                            <td class="alineacion" colspan="2">Hora:</td>
                            <td class="alineacion" colspan="3">Cliente: {{ $client->name ." ". $client->last_name }} </td>
                        </tr> 

                        <tr class="">
                            <td class="alineacion" colspan="3">Reporta:</td>
                            <td class="alineacion" colspan="5">Capacidad de conservador: {{$product->getProductWithCapacity->capacity}}</td>
                        </tr>

                        <tr>
                            <td class="alineacion espacioButtom" colspan="3">Nombre y firma de quien reporta:</td>
                            <td class="alineacion espacioButtom" colspan="5">Nombre y firma de quien recibe reporte:</td>
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
                            <td class="alineacion" colspan="2">Lugar:</td>
                            <td class="alineacion" colspan="1">Hora inicial:</td>
                            <td class="alineacion" colspan="1">Hora final:</td>
                        </tr> 

                        <tr class="">
                            <td class="alineacion" colspan="3">Modelo:</td>
                            <td class="alineacion" colspan="2">Capacidad: {{$product->getProductWithCapacity->capacity}}</td>
                            <td class="alineacion" colspan="3">No. Serie: {{$product->serial_number}}</td>
                        </tr>

                        <tr>
                            <td class="alineacion espacioButtom" colspan="7">Nombre o razon social:</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="funcionamiento">
                <table class="">            
                    <tbody>
                        <tr class="">
                            <td class="" colspan="22">FUNCIONAMIENTO DE PARTES</td>
                        </tr>
                        
                        <!-- Partes -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Partes</td>
                            <td class="alineacion" colspan="1">Capacidad</td>
                            <td class="alineacion" colspan="1">Cambio</td>
                            <td class="alineacion" colspan="2">
                                Funciona
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Para y arranca
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Ruido normal
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!-- Compresor -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Compresor</td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <!-- Funciona -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Arranca -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Ruido -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Micromotor -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Micromotor</td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <!-- Funciona -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Arranca -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Ruido -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Relay -->                            
                        <tr class="">
                            <td class="alineacion" colspan="14">Relay</td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <!-- Funciona -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Arranca -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Ruido -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Termico -->  
                        <tr class="">
                            <td class="alineacion" colspan="14">Termico</td>
                           <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <!-- Funciona -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Arranca -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Ruido -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                         <!-- Capacitor -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Capacitor</td>
                           <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <!-- Funciona -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Arranca -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Ruido -->
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!-- Termostato -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Termostato</td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="2">
                                Calibracion
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>

                            </td>
                            <td class="alineacion" colspan="2"></td>
                            <td class="alineacion" colspan="2"></td>
                        </tr>
                        
                        <!-- Refrigerante -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Refrigerante</td>
                            <td class="alineacion" colspan="2">
                                <table>
                                    <tr>
                                        <td class="alineacion">Tipo</td>
                                        <td class="alineacion">Cantidad</td>
                                    </tr>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Cargo
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2"></td>
                            <td class="alineacion" colspan="2"></td>
                        </tr>
                        
                        <!-- Calcomanias/Logotipo -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Calcomanias/Logotipo</td>
                            <td class="alineacion" colspan="3">
                                <table>
                                    <tr>
                                        <td class="alineacion">Izquierdo</td>
                                        <td class="alineacion">Central</td>
                                        <td class="alineacion">Derecho</td>
                                    </tr>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="1"></td>
                            <td class="alineacion" colspan="2"></td>
                            <td class="alineacion" colspan="2"></td>
                        </tr>
                        
                        <!-- Refacciones utilizadas -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Refacciones utilizadas</td>
                            <td class="alineacion" colspan="1">
                                Ventilador
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="1">
                                Cable
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Clavija
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Aceite
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Otros
                                <table>
                                    <tr>
                                        <td class="espacioButtom"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!-- Limpieza del conservador -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Limpieza del conservador</td>
                            <td class="alineacion" colspan="1">
                                Exterior
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="1">
                                Interior
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Deshielo
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" rowspan="3" colspan="4">
                                Sello
                            </td>
                        </tr>
                        
                        <!-- Condensador -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Condensador</td>
                            <td class="alineacion" colspan="1">
                                Sopleteo
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="1">
                                FOAM
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Cambio
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Puerta -->
                        <tr class="">
                            <td class="alineacion" colspan="14">Puerta</td>
                            <td class="alineacion" colspan="1">
                                Sella hule
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="1">
                                Cambio hule
                                <table>
                                    <tr>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="alineacion" colspan="2">
                                Bisagras
                                <table>
                                    <tr>
                                        <td>Bien</td>
                                        <td>Mal</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Trabajo realizado -->
                        <tr class="">
                            <td class="alineacion espacioButtom" colspan="14">Trabajo realizado</td>
                            <td class="alineacion espacioButtom" colspan="14"></td>
                        </tr>

                        <!-- Observaciones -->
                        <tr class="">
                            <td class="alineacion espacioButtom" colspan="14">Observaciones</td>
                            <td class="alineacion espacioButtom" colspan="14">{{$maintenance->observation}}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </main>
        <!--
        <footer class="footer">
            <h2>Hielitos - Todos los derechos reservados {{ now()->year }} </h2>
        </footer>
        -->
    </body>
</html>