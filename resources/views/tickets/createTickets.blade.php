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
                                        <button type="button" class="btn btn-primary">Limpiar formulario</button>
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
                                    <input type="text" class="form-control" id="nombre" name="nombre" value=""
                                        required>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Apellido:</label></br>
                                    <input type="text" class="form-control" id="apellido" name="apellido" value=""
                                        required>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono:</label></br>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Correo Electronico:</label></br>
                                    <input type="email" class="form-control" id="correo" name="correo" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Fecha de nacimiento:</label></br>
                                    <input type="date" class="form-control" id="nacimiento" name="nacimiento"
                                        value="" required>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Doctor:</label></br>
                                    <input type="text" class="form-control" id="doctor" name="doctor" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Tipo:</label></br>
                                    <select class="form-control" id="tipo" name="tipo"
                                        aria-label="Default select example" onchange="sucursal()" required>
                                        <option>Seleccione una opcion</option>
                                        <option value="1">Sucursales</option>
                                        <option value="2">Doctores</option>
                                        <option value="3">Maquilas</option>
                                    </select>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Sucursal:</label></br>
                                    <select class="form-control" id="maquila_id" name="maquila_id"
                                        aria-label="Default select example" required>

                                    </select>

                                    {{--  <option value="" selected>Seleccione</option>
                                        @forelse ($maquilas as $maquila)
                                            <option value="{{ $maquila->id }}">{{ $maquila->nombre }}</option>
                                        @empty
                                        @endforelse  --}}
                                    </select>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Total:</label></br>
                                    <input type="text" class="form-control" id="total" name="total"
                                        value="0" readonly>
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Abono:</label></br>
                                    <input type="text" class="form-control" id="abono" name="abono"
                                        value="" required>
                                </div>

                                <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-12 col-md-2">
                                            <h4 class="form-label">Examenes:</h4>
                                        </div>
                                        <div class="col-12 col-md-7 d-flex align-items-center">
                                            <input type="text" class="form-control" id="searchexamen"
                                                name="searchexamen" placeholder="Buscar Examen">
                                            <i class="busqueda bi bi-search"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 ">
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

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
                $('#correo').val(ui.item.correo);
            }

        });
    </script>

    <script>
        function sucursal() {
            const tipo = document.getElementById('tipo').value;
            const ListaSeleccionar = document.getElementById('maquila_id');

            var url = '{{ route('ticket.tipoXsucursal', ':tipo') }}';
            url = url.replace(':tipo', tipo);

            console.log(url); //serviciosTrasporte.obrasXconcepto
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Actualiza las opciones en el select "item"
                    //console.log(data);
                    ListaSeleccionar.innerHTML = '';
                    data.forEach(item => {
                        //console.log(item);
                        var option = document.createElement('option');
                        option.value = item.id;
                        option.textContent = item.nombre;
                        ListaSeleccionar.appendChild(option);
                    });

                });
        };
    </script>

    <script>
        var curso = ['html', 'hola', 'hi'];
        $('#searchexamen').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('search.ticket.examen') }}",

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
                $('#' + ui.item.id).prop("checked", true);
                var total = parseFloat($('#total').val()) + parseFloat(ui.item.costo);

                $('#total').val(parseFloat(total));


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

    <script>
        function vacio() {
            alert('examenes vacios');
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Examenes vacios'
            })
        }
        var slug = '{{ Session::get('message') }}';
        if (slug == 1) {
            vacio();

        }
    </script>
@endsection
