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
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Definir las reglas del encabezado **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Estilos extra personales **/
            /*background-color: #03a9f4;*/
            color: white;
            /*text-align: center;*/
            line-height: 1.5cm;
        }

        header img {
            height: 105px;
            /*            width: 65px;
            padding-top: 8px;
            padding-left: 8px*/
        }

        header div {
            color: black;
        }

        main {
            margin-top: 90px
        }

        /** Definir las reglas del pie de página **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Estilos extra personales **/
            background-color: #0c3e65;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        .page-break {
            page-break-after: always;
        }

        .titulo {
            color: #0c3e65;
        }

        .pl-3 {
            padding-left: 3rem;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header class="row">
        <div class="col">
            <img src="img\header.png" alt="">


        </div>
        <div class="col">
            <p>
                {{--  Cabecera del documento  --}}
            </p>
        </div>

    </header>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="content
            p-3">
            <div class="titulo">
                <p class=" text-uppercase mb-2 "><strong>Fecha: </strong>
                    {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                </p>
                <p class=" text-uppercase mb-2"><strong>Paciente:</strong> {{ $ticket->nombre }}
                    {{ $ticket->apellido }} <strong class="pl-3">Edad: </strong>
                    {{ \Carbon\Carbon::parse($ticket->nacimiento)->age }}
                </p>
                <p class=" text-uppercase mb-2"><strong>DR(A): </strong>
                    @if ($ticket->doctor == null || $ticket->doctor == '')
                        A quien corresponda
                    @elseif (1 == 1)
                        {{ $ticket->doctor }}
                    @endif
                </p>
                <h1 class="display-5 mb-4 text-uppercase"><strong>{{ $examen->nombre }}</strong></h1>
            </div>
            <div class="col-10 mx-auto">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="labelTitulo">
                            <th></th>
                            <th>Resultado</th>
                            <th>Unidad</th>
                            <th>Referencia</th>
                        </thead>
                        <tbody>
                            {{--  {{ $ticket->maquila = 1 ? 'selected' : '' }}  --}}
                            @forelse ($parametros as $parametro)
                                <tr>
                                    <td><b> {{ $parametro->nombre }} </b></td>
                                    <td>
                                        @if ($parametro->respuesta == 1)
                                            @if ($parametro->resultado <= $parametro->bajo || $parametro->resultado >= $parametro->alto)
                                                <b> {{ $parametro->resultado }}</b>
                                            @else
                                                {{ $parametro->resultado }}
                                            @endif
                                        @elseif ($parametro->respuesta == 2)
                                            @if ($parametro->resultado != $parametro->referencia)
                                                <b> {{ $parametro->resultado }}</b>
                                            @else
                                                {{ $parametro->resultado }}
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($parametro->medicion == null || $parametro->medicion == '')
                                            N/A
                                        @elseif (1 == 1)
                                            {{ $parametro->medicion }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($parametro->respuesta == 1)
                                            {{ $parametro->bajo }} - {{ $parametro->alto }}
                                        @elseif ($parametro->respuesta == 2)
                                            {{ $parametro->referencia }}
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Sin registros.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </main>

    <footer>
        Copyright © {{ date('Y') }}
    </footer>

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
