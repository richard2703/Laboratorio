@extends('layouts.app', ['activePage' => 'tickets', 'activeItem' => 'tickets'])

@section('content')
    <div class="pagetitle">
        <h1>Resultados</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Tickets</li>
                <li class="breadcrumb-item active">Resultados</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col card-title ">
                            <h2 class="">Ticket N°: {{ $ticket->id }} - {{ $ticket->nombre }}
                                {{ $ticket->apellido }}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('faild'))
                            <div class="alert alert-danger" role="faild">
                                {{ session('faild') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="labelTitulo">
                                    <th>ID</th>
                                    <th>Examen</th>
                                    <th>Estatus</th>
                                    <th>Descargar</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($examenes as $examene)
                                        <tr>
                                            <td>{{ $examene->id }}</td>
                                            <td>{{ $examene->nombre }}</td>
                                            <td>
                                                @if ($examene->estatus == 0)
                                                    En Espera
                                                @elseif ($examene->estatus == 1)
                                                    En Revision
                                                @elseif ($examene->estatus == 2)
                                                    Terminado
                                                @endif
                                            </td>
                                            <td>
                                                @if ($examene->estatus == 2)
                                                    <form action="{{ route('resultados.pdf') }}" method="POST"
                                                        style="display: inline-block;" target="_blank">
                                                        @csrf
                                                        <input type="hidden" name="ticket" value="{{ $ticket->id }}">
                                                        <input type="hidden" name="examen" value="{{ $examene->id }}">
                                                        <input type="hidden" name="toma" value="{{ $examene->toma }}">
                                                        <button class="boton" type="submit">
                                                            <i class="bi bi-download h3"></i>
                                                        </button>

                                                    </form>
                                                @elseif ($examene->estatus != 2)
                                                    <i class="bi bi-hourglass h3"></i>
                                                @endif
                                            </td>
                                            <td class="td-actions text-right">
                                                @can('user_edit')
                                                    @if ($examene->estatus == 0)
                                                        <form action="{{ route('resultados.create', $ticket->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            <input type="hidden" name="examen" value="{{ $examene->id }}">
                                                            <input type="hidden" name="toma" value="{{ $examene->toma }}">
                                                            <button class="boton" type="submit" rel="tooltip">
                                                                <i class="bi bi-pencil h3 "></i>
                                                            </button>
                                                        </form>
                                                    @elseif ($examene->estatus >= 1)
                                                        <form action="{{ route('resultados.edit', $ticket->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            <input type="hidden" name="examen" value="{{ $examene->id }}">
                                                            <input type="hidden" name="toma" value="{{ $examene->toma }}">
                                                            <button class="boton" type="submit" rel="tooltip">
                                                                <i class="bi bi-card-text h3"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                @endcan
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
                    <div class="card-footer mr-auto">
                        {{ $examenes->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('js/alertas.js') }}"></script>

    <script>
        function Guardado() {
            // alert('test');
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
                title: 'Guardado con exito'
            })
        }
        var slug = '{{ Session::get('message') }}';
        if (slug == 1) {
            Guardado();

        }
        if (slug == 2) {
            Borrado();

        }
    </script>
    <script>
        function cargar(id, nombre, baja, alta) {
            const parametroid = document.getElementById('id');
            parametroid.value = id;
            const parametronombre = document.getElementById('nombreU');
            parametronombre.value = nombre;
            const parametrobajo = document.getElementById('bajoU');
            parametrobajo.value = baja;
            const parametroalto = document.getElementById('altoU');
            parametroalto.value = alta;
        }
    </script>
@endsection
