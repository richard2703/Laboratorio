@extends('layouts.app', ['activePage' => 'tickets', 'activeItem' => 'newTicket'])

@section('content')
    <div class="pagetitle">
        <h1>Tickets</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Tickets</li>
                <li class="breadcrumb-item active">Nuevo Ticket</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="row">
                            <div class="search-bar col-12 col-md-9 card-title ">
                                <form class="search-form d-flex align-items-center" method="POST" action="#">
                                    <input type="text" class="form-control" name="query" placeholder="Buscar Paciente"
                                        title="Enter search keyword">
                                    <button type="submit" class="busqueda" title="Search">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="col-12 col-md-3 card-title text-end">
                                @can('user_create')
                                    <a href="#">
                                        <button type="button" class="btn btn-primary">Nuevo Paciente</button>
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('tickets.store') }}" method="post" class="form-horizontal">
                        @csrf
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
                                    <input type="text" class="form-control" id="doctor" name="doctor" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Maquila:</label></br>
                                    <select class="form-control" id="maquila" name="maquila"
                                        aria-label="Default select example">
                                        <option selected>Seleccione</option>
                                        <option value="1">Maquinaria 1</option>
                                        <option value="2">Maquinaria 2</option>
                                    </select>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Total:</label></br>
                                    <input type="text" class="form-control" id="total" name="total" value="0"
                                        readonly>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Abono:</label></br>
                                    <input type="text" class="form-control" id="abono" name="abono" value="">
                                </div>

                                <div class="col-12 ">
                                    <label class="form-label">Examenes:</label></br>
                                    <div class="row position-relative d-flex">
                                        @forelse ($examenes as $examene)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="checkbox" class="form-check-input" id="{{ $examene->id }}"
                                                    name="examenes[]" value="{{ $examene->id }}"
                                                    onclick="sumar({{ $examene->id }},{{ $examene->costo }});">
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
