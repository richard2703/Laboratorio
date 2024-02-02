<html>

<head>
    <style>
        /**
Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
puede ser de altura y anchura completas.
**/
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            font-family: 'Helvetica';
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        main {
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 30px;
        }

        div .card {
            border: solid 2px cornflowerblue;
        }

        .wlogo {
            height: 100px;
        }

        .hlogo {
            height: 80px;
        }

        table {
            width: 100%;
        }

        li {
            list-style: none;
        }

        /*********************************************************/
        .test2 {
            text-align: center;
        }

        .test3 {
            display: flex;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="col1"><img class="wlogo"
                                        src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/header2.png"
                                        alt=""></th>
                                <th class="col2"><img class="hlogo"
                                        src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/matriz2.png"
                                        alt=""></th>
                                <th class="col3">Fecha:
                                    <br>{{ \Carbon\Carbon::parse($ticket->created_at)->format('d/m/y') }}
                                </th>
                                <th class="col4">Folio:<br>{{ $ticket->id }}</b></th>

                            </tr>
                        </thead>
                    </table>

                    <table>
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pru1"><strong>Nombre del medico:</strong></td>
                                <td class="col2">
                                    @if ($ticket->doctor == null)
                                        A quien corresponda
                                    @else
                                        {{ $ticket->doctor }}
                                    @endif
                                </td>
                                <td class="col3"></td>
                                <td class="col4"></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Paciente :</strong></td>
                                <td class="">{{ $ticket->nombre }} {{ $ticket->apellido }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Telefono:</strong></td>
                                <td class="">{{ $ticket->telefono }}</td>
                                <td class=""><strong>Email:</strong></td>
                                <td class="">
                                    @if ($ticket->correo == null)
                                        Sin registro
                                    @else
                                        {{ $ticket->correo }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <ul style="font-size: larger; padding-top: 15px;">

                        <li>
                            <strong>Estudios: </strong>
                        </li>
                        <li>
                            @forelse ($examenes as $examene)
                                {{ $examene->abreviacion }},
                            @empty
                                <tr>
                                    <td colspan="2">Sin registros.</td>
                                </tr>
                            @endforelse
                        </li>
                        <li>
                        </li>
                        <li>

                        </li>
                    </ul>

                    <table>
                        <thead>
                            <tr>
                                <th class="col1">Entrega de estudios</th>
                                <th class="col2">Total $</th>
                                <th class="col3">Anticipo $</th>
                                <th class="">Pendiente $</th>
                                <th class="">Contraseña</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border-radius: 1em; border-color: black; margin-right: 5px !important;
                                border-width: 1px;
                                border-style: solid; height: 31px; margin-top: 3px"
                                    class="d-flex justify-content-center align-items-center"></td>
                                <td class="col2">$ {{ $ticket->total }}</td>
                                <td class="col3">$ {{ $ticket->abono }}</td>
                                <td class="col4">$ {{ $ticket->total - $ticket->abono }}</td>
                                <td class="col4">{{ $ticket->pass }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="col1"><img class="wlogo"
                                        src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/header2.png"
                                        alt=""></th>
                                <th class="col2"><img class="hlogo"
                                        src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/matriz2.png"
                                        alt=""></th>
                                <th class="col3">Fecha:
                                    <br>{{ \Carbon\Carbon::parse($ticket->created_at)->format('d/m/y') }}
                                </th>
                                <th class="col4">Folio:<br>{{ $ticket->id }}</b></th>

                            </tr>
                        </thead>
                    </table>

                    <table>
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pru1"><strong>Nombre del medico:</strong></td>
                                <td class="col2">
                                    @if ($ticket->doctor == null)
                                        A quien corresponda
                                    @else
                                        {{ $ticket->doctor }}
                                    @endif
                                </td>
                                <td class="col3"></td>
                                <td class="col4"></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Paciente :</strong></td>
                                <td class="">{{ $ticket->nombre }} {{ $ticket->apellido }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Telefono:</strong></td>
                                <td class="">{{ $ticket->telefono }}</td>
                                <td class=""><strong>Email:</strong></td>
                                <td class="">
                                    @if ($ticket->correo == null)
                                        Sin registro
                                    @else
                                        {{ $ticket->correo }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <ul style="font-size: larger; padding-top: 15px;">

                        <li>
                            <strong>Estudios: </strong>
                        </li>
                        <li>
                            @forelse ($examenes as $examene)
                                {{ $examene->abreviacion }},
                            @empty
                                <tr>
                                    <td colspan="2">Sin registros.</td>
                                </tr>
                            @endforelse
                        </li>
                    </ul>

                    <table>
                        <thead>
                            <tr>
                                <th class="col1">Entrega de estudios</th>
                                <th class="col2">Total $</th>
                                <th class="col3">Anticipo $</th>
                                <th class="">Pendiente $</th>
                                <th class="">Contraseña</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border-radius: 1em; border-color: black; margin-right: 5px !important;
                                border-width: 1px;
                                border-style: solid; height: 31px; margin-top: 3px"
                                    class="d-flex justify-content-center align-items-center"></td>
                                <td class="col2">$ {{ $ticket->total }}</td>
                                <td class="col3">$ {{ $ticket->abono }}</td>
                                <td class="col4">$ {{ $ticket->total - $ticket->abono }}</td>
                                <td class="col4">{{ $ticket->pass }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/php">
	if ( isset($pdf) ) {
		$pdf->page_script('
			$font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
			$pdf->text(270, 730, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
		');
	}
</script>
</body>

</html>
