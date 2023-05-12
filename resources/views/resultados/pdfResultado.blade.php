<html>

<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 5cm 2cm 3cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 5cm;
            text-align: center;
            line-height: 30px;
        }

        header img {
            height: 150px;
            /*            width: 65px;
            padding-top: 8px;
            padding-left: 8px*/
        }

        footer {
            position: fixed;
            bottom: 1cm;
            left: 8.5cm;
            right: 0cm;
            height: 2cm;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <div style="padding: 10px; float: left; width: 30%; text-align: justify;" class=" ">
            <img src="img\header2.png" alt="">
            {{--  <img src="https://q2ces.com/img/login/logoQcem2.svg" alt="">  --}}
        </div>
        <div style="padding: 10px; float: right; width: 70%; text-align: justify;">
            <ul style="font-size: larger; padding-top: 15px;">
                <li><strong>Fecha: </strong>
                    {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                </li>
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
    </header>
    <footer>
        <img src="img\foder.png" alt="">
    </footer>

    <main>
        <div class="content ">
            <div class="text-center">
                <h1 class="display-5 mb-4 text-uppercase"><strong>{{ $examen->examennombre }}</strong></h1>

            </div>
            <div class="col-12 mx-auto">
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
                                @if ($bandera != $parametro->tipo)
                                    {{ $bandera = $parametro->tipo }}
                                    <tr>
                                        <td><b> {{ $parametro->tipo }} </b></td>
                                    </tr>
                                @else
                                @endif
                                <tr>
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
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Sin registros.</td>
                                </tr>
                            @endforelse

                            @forelse ($parametros as $parametro)
                                @if ($bandera != $parametro->tipo)
                                    {{ $bandera = $parametro->tipo }}
                                    <tr>
                                        <td><b> {{ $parametro->tipo }} </b></td>
                                    </tr>
                                @else
                                @endif
                                <tr>
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
</body>

</html>
