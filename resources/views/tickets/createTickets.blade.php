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
                                <form class="search-form d-flex align-items-center" action="#">
                                    <input type="text" class="form-control" id="search" name="search"
                                        placeholder="Buscar Paciente" title="Enter search keyword">
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
                        <input type="hidden" id="paciente_id" name="paciente_id">
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

    {{--  Buscador  --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>

    <script>
        var curso = ['html', 'hola', 'hi'];
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('search.ticket.paciente') }}",

                    dataType: 'json',
                    data: {
                        term: request.term,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            minChars: 1,
            width: 402,
            matchContains: "word",
            autoFill: true,
            minLength: 1,
            select: function(event, ui) {
                // Rellenar los campos con los datos de la persona seleccionada
                $('#paciente_id').val(ui.item.id);
                $('#nombre').val(ui.item.nombre);
                $('#apellido').val(ui.item.apellido);
                $('#telefono').val(ui.item.telefono);
                $('#nacimiento').val(ui.item.nacimiento);
            }

        });
    </script>
    {{--  Suma  --}}
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
