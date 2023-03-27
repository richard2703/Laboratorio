<html>

<head>

</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        {{--  <img src="{{ asset('img\slides-1.jpg') }}" alt="">  --}}
        {{--  {!! Html::img('assets\img\slides-1.jpg') !!}  --}}
        Cabecera del documento
    </header>

    <footer>
        Copyright © {{ date('Y') }}
    </footer>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="content p-3">
            <div>
                <p class="fw-medium text-uppercase text-primary mb-2">Fecha:
                    {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                </p>
                <p class="fw-medium text-uppercase text-primary mb-2">Paciente: {{ $ticket->nombre }}
                    {{ $ticket->apellido }} Edad: {{ \Carbon\Carbon::parse($ticket->nacimiento)->age }}
                </p>
                <p class="fw-medium text-uppercase text-primary mb-2">DR(A):
                    @if ($ticket->doctor == null || $ticket->doctor == '')
                        A quien corresponda
                    @elseif (1 == 1)
                        {{ $ticket->doctor }}
                    @endif
                </p>
                <h1 class="display-5 mb-4">{{ $examen->nombre }}</h1>
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

    <script type="text/javascript">
        if (isset($pdf)) {
            $pdf - > page_script('
                $font = $fontMetrics - > get_font(" Arial, Helvetica, sans-serif", "normal"); $pdf - >
                text(270, 730, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
                ');
            }
    </script>
</body>

</html>
