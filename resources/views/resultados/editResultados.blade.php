@extends('layouts.app', ['activePage' => 'tickets', 'activeItem' => 'tickets'])

@section('content')
    <div class="pagetitle">
        <h1>Resultados</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Tickets</li>
                <li class="breadcrumb-item ">Resultados</li>
                <li class="breadcrumb-item active">Examen</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('resultados.update') }}" method="post" class="form-horizontal">

                    <div class="card">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-12 col-md-9 card-title ">
                                    <h2 class="">{{ $ticket->nombre }}
                                        {{ $ticket->apellido }} - {{ $examen->nombre }}</h2>
                                </div>
                                <div class="col-12 col-md-3 card-title">
                                    <label class="labelTitulo">Estatus:</label></br>
                                    <select class="form-select" id="estatus" name="estatus" aria-label="Default">
                                        <option value="1" {{ $toma->estatus == 1 ? 'selected' : '' }}>Revisando
                                        </option>
                                        <option value="2" {{ $toma->estatus == 2 ? 'selected' : '' }}>Terminado
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--  <form action="{{ route('resultados.update') }}" method="post" class="form-horizontal">  --}}
                        @csrf
                        <input type="hidden" name="examenes_id" value={{ $examen->examenid }}>
                        <input type="hidden" name="ticket_id" value={{ $ticket->id }}>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 ">
                                    <label class="form-label">Parametros:</label></br>
                                    <div class="row position-relative d-flex">
                                        @forelse ($parametros as $parametro)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="hidden" name="parametro[]" value={{ $parametro->id }}>
                                                <label class="form-label">{{ $parametro->nombre }} </label>
                                                @if ($parametro->respuesta == 1)
                                                    <input type="number" name="respuesta[]" id=""
                                                        class="form-control" value="{{ $parametro->resultado }}">
                                                @elseif ($parametro->respuesta == 2)
                                                    <input type="text" name="respuesta[]" id=""
                                                        class="form-control" value="{{ $parametro->resultado }}">
                                                @endif
                                            </div>
                                        @empty
                                            <label> No hay </label>
                                        @endforelse
                                    </div>
                                </div>
                                <input type="hidden" name="toma" value="{{ $examen->toma }}">
                                <div class=" col-12 col-sm-6   my-1">
                                    <label class="form-label">Notas: </label>
                                    <p>
                                        <textarea class="form-control" name="nota" rows="5"cols="25">{{ $toma->nota }}</textarea>
                                    </p>
                                </div>
                                <div class=" col-12 col-sm-6   my-1">
                                    <label class="form-label">Comentarios:</label>
                                    <p>
                                        <textarea class="form-control" name="comentario" rows="5" cols="25">{{ $toma->comentario }}</textarea>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto text-center">
                            <button type="submit" class="btn btn-primary" onclick="alertaGuardar()">Guardar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
