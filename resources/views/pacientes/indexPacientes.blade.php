@extends('layouts.app', ['activePage' => 'pacientes', 'activeItem' => ''])

@section('content')
    <div class="pagetitle">
        <h1>Parametros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Pacientes</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            @can('pacientes_create')
                                <a href="{{ route('pacientes.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo Paciente</button>
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
                                    <th>Telefono </th>
                                    <th>Nacimiento</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ $paciente->id }}</td>
                                            <td>{{ $paciente->nombre }}</td>
                                            <td>{{ $paciente->apellido }}</td>
                                            <td>{{ $paciente->telefono }}</td>
                                            <td>{{ $paciente->nacimiento }}</td>

                                            <td class="td-actions text-right">
                                                @can('pacientes_show')
                                                    <a href="#"><i class="bi bi-card-text h3"></i></a>
                                                @endcan
                                                @can('pacientes_edit')
                                                    <a href="{{ route('pacientes.edit', $paciente->id) }}"><i
                                                            class="bi bi-pencil h3 px-2"></i></a>
                                                @endcan
                                                @can('pacientes_destroy')
                                                    <form action="#" method="POST" style="display: inline-block;"
                                                        onsubmit="return confirm('Seguro?')">
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
                        {{ $pacientes->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </section>
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
    </script>
@endsection
