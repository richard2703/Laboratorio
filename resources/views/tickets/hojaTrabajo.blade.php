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
            margin: 5cm 2cm 3cm;

        }

        /** Definir las reglas del encabezado **/
        header {
            position: fixed;
            /* top: .5cm;*/
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 5cm;

            /** Estilos extra personales **/
            /*background-color: #03a9f4;*/
            color: white;
            /*text-align: center;*/
            /*line-height: 1cm;*/
            line-height: 30px;

        }

        header img {
            height: 150px;
            /*            width: 65px;
            padding-top: 8px;
            padding-left: 8px*/
        }

        header div {
            color: black;
        }

        /** Definir las reglas del pie de página **/
        footer {
            /*position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;

            /** Estilos extra personales **/
            /*background-color: #0c3e65;
            color: white;*/
            /*text-align: center;
            line-height: 1.5cm;*/
            position: fixed;
            bottom: 1cm;
            left: 8.5cm;
            right: 0cm;
            height: 2cm;
            /*background-color: #2a0927;*/
            color: white;
            text-align: center;
            line-height: 1cm;
        }

        footer img {
            height: 95px;
            padding-bottom: 30px;
            /*            width: 65px;
            padding-top: 8px;
            padding-left: 8px*/
        }

        li {
            list-style: none;
        }



        strong {
            color: #0c3e65;
            display: contents;
        }

        .pl-3 {
            padding-left: 3rem;

        }
    </style>

</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <div class="row" style="display: flex;">
            {{--  <div style="padding: 10px; float: left; width: 30%; text-align: justify;" class=" ">
                <img src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/header2.png" alt="">  --}}
            {{--  <img src="https://q2ces.com/img/login/logoQcem2.svg" alt="">  --}}
            {{--  </div>  --}}
            <div style="padding: 10px; float: left; width: 50%; text-align: justify;">
                <ul style=" padding-top: 15px;">
                    {{--  <li><strong>Fecha: </strong>
                        {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                    </li>  --}}
                    <li><strong>Paciente:</strong> {{ $ticket->nombre }}
                        {{ $ticket->apellido }}
                    </li>
                    <li><strong>Edad: </strong>
                        {{ \Carbon\Carbon::parse($ticket->nacimiento)->age }}</li>
                    <li><strong>DR(A): </strong>
                        @if ($ticket->doctor == null || $ticket->doctor == '')
                            A quien corresponda
                        @elseif (1 == 1)
                            {{ $ticket->doctor }}
                        @endif
                    </li>

                </ul>

            </div>

            <div style="padding: 10px; float: right; width: 50%; text-align: justify;">
                <ul style="padding-top: 15px;">
                    {{--  <li><strong>Fecha: </strong>
                        {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                    </li>  --}}
                    <li><strong>N. Ticket:</strong> {{ $ticket->id }}
                    </li>
                    <li>
                        <strong>Página: </strong>
                    </li>
                    {{--  <li><strong>Edad: </strong>
                        {{ \Carbon\Carbon::parse($ticket->nacimiento)->age }}</li>
                    <li><strong>DR(A): </strong>
                        @if ($ticket->doctor == null || $ticket->doctor == '')
                            A quien corresponda
                        @elseif (1 == 1)
                            {{ $ticket->doctor }}
                        @endif
                    </li>  --}}

                </ul>

            </div>
        </div>

    </header>

    <footer>
        <div style="">
            {{--  <img src="{{ env('APP_URL', 'https://laboratorioprevida.com') }}/img/foder.png" alt="">  --}}
        </div>
        {{--  Copyright © {{ date('Y') }}  --}}
    </footer>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="content">
            <div class="text-center">
                {{--  <h1 class="display-5 mb-4 text-uppercase"><strong>{{ $examen->examennombre }}</strong></h1>  --}}
                {{--  @forelse ($examenes as $examen)
                    <b> {{ $examen->examen }}</b>
                    <b> {{ $examen->nombre }}</b>

                    <br>
                @empty
                @endforelse  --}}
                {{--  <h1 class="display-5 mb-4 text-uppercase"><strong>{{ $examen->examennombre }}</strong></h1>  --}}

            </div>
            <div class="col-12 mx-auto">
                <div class="table-responsive">
                    <table class="table text-center" style="width: 100%;text-align: center;">
                        <thead class="labelTitulo">
                            <th style="width: 150px;">Examen</th>
                            <th style="width: 150px;">Tipo</th>
                            <th style="width: 150px;">Resultado</th>
                            <th>Unidad</th>

                        </thead>
                        <tbody>
                            {{--  {{ $ticket->maquila = 1 ? 'selected' : '' }}    --}}

                            @forelse ($examenes as $examen)
                                <tr>
                                    @if ($banderaE != $examen->examen)
                                        {{ $banderaE = $examen->examen }}

                                        <td><b> {{ $examen->examen }} </b></td>
                                    @else
                                        <td><b> </b></td>
                                    @endif
                                    @if ($bandera != $examen->tipo)
                                        {{ $bandera = $examen->tipo }}
                                        <td><b> {{ $examen->tipo }} </b></td>
                                    @else
                                        <td><b> </b></td>
                                    @endif
                                    <td>{{ $examen->nombre }} </td>

                                    <td>
                                        <div style="border-radius: 1em; border-color: black; margin-right: 5px !important;
                                        border-width: 1px;
                                        border-style: solid; height: 31px; margin-top: 3px"
                                            class="d-flex justify-content-center align-items-center"> </div>
                                    </td>
                                </tr>
                                {{--  <tr>
                                    <td> {{ $parametro->nombre }}</td>
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
                                </tr>  --}}
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

    <script type="text/php">
	if ( isset($pdf) ) {
		$pdf->page_script('
			$font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
			$pdf->text(362, 61, " $PAGE_NUM de $PAGE_COUNT", $font, 12);
		');

	}
</script>
</body>

</html>
