@extends('layouts.app', ['activePage' => 'tickets', 'activeItem' => 'tickets'])

@section('content')
    <div class="pagetitle">
        <h1>Tickets</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Tickets</li>
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
                                <a href="{{ route('tickets.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo Ticket</button>
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="labelTitulo">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Total</th>
                                    <th>Abono </th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($tickets as $ticket)
                                        <tr>
                                            <td>{{ $ticket->id }}</td>
                                            <td>{{ $ticket->nombre }}</td>
                                            <td>{{ $ticket->apellido }}</td>
                                            <td>{{ $ticket->telefono }}</td>
                                            <td>{{ $ticket->total }}</td>
                                            <td>{{ $ticket->abono }}</td>
                                            <td class="td-actions text-right">
                                                @can('user_show')
                                                    <a href="{{ route('resultados.index', $ticket->id) }}"><i
                                                            class="bi bi-card-text h3"></i></a>
                                                @endcan
                                                @can('user_edit')
                                                    <a href="{{ route('tickets.edit', $ticket->id) }}"><i
                                                            class="bi bi-pencil h3 px-2"></i></a>
                                                @endcan
                                                @can('user_destroy')
                                                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST"
                                                        style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </form>
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
                        {{ $tickets->links('vendor.pagination.bootstrap-5') }}
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
