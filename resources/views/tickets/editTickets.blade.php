@extends('layouts.app', ['activePage' => 'tickets', 'activeItem' => 'tickets'])

@section('content')
    <div class="pagetitle">
        <h1>Tickets</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Ticket</li>
                <li class="breadcrumb-item active">Editar tickets</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            @can('user_create')
                                <a href="#">
                                    <button type="button" class="btn btn-primary">Nuevo Paciente</button>
                                </a>
                            @endcan
                        </div>
                    </div>
                    <form action="{{ route('tickets.update', $ticket->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="row">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Nombre:</label></br>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Apellido:</label></br>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono:</label></br>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Fecha de nacimiento:</label></br>
                                    <input type="date" class="form-control" id="nacimiento" name="nacimiento"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Doctor:</label></br>
                                    <input type="text" class="form-control" id="doctor" name="doctor"
                                        value="{{ $ticket->doctor }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Maquila:</label></br>
                                    <select class="form-control" id="maquila" name="maquila"
                                        aria-label="Default select example">
                                        <option selected>Seleccione</option>
                                        <option value="1" {{ $ticket->maquila = 1 ? 'selected' : '' }}>Maquinaria 1
                                        </option>
                                        <option value="2" {{ $ticket->maquila = 2 ? 'selected' : '' }}>Maquinaria 2
                                        </option>
                                    </select>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Total:</label></br>
                                    <input type="text" class="form-control" id="total" name="total"
                                        value="{{ $ticket->total }}" readonly>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Abono:</label></br>
                                    <input type="text" class="form-control" id="abono" name="abono"
                                        value="{{ $ticket->abono }}">
                                </div>

                                <div class="col-12 ">
                                    <label class="form-label">Examenes:</label></br>
                                    <div class="row position-relative d-flex">
                                        @forelse ($examenes as $examene)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="checkbox" class="form-check-input" id="{{ $examene->id }}"
                                                    name="examenes[]" value="{{ $examene->id }}"
                                                    onclick="sumar({{ $examene->id }},{{ $examene->costo }});"
                                                    {{ $ticket->examenes->contains($examene->id) ? 'checked' : '' }}>
                                                <label for="{{ $examene->id }}">
                                                    {{ $examene->nombre }}</label>
                                            </div>
                                        @empty
                                            <label> No hay </label>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto text-center">
                            <button type="submit" class="btn btn-primary" onclick="alertaGuardar()">Guardar</button>
                        </div>
                        <!--End footer-->
                    </form>

                </div>

            </div>
        </div>
    </section>

    <script>
        function sumar(id, valor) {
            if ($('#' + id).prop("checked")) {
                total = (parseFloat(document.getElementById('total').value) + parseFloat(valor)).toFixed(2);
            } else {
                total = (parseFloat(document.getElementById('total').value) - parseFloat(valor)).toFixed(2);
            }
            document.getElementById('total').value = total;
        }
    </script>
@endsection
