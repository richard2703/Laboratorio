@extends('layouts.app', ['activePage' => 'maquilas', 'activeItem' => ''])

@section('content')
    <div class="pagetitle">
        <h1>Maquilas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Maquilas</li>
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
                                <a href="{{ route('maquilas.create') }}">
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
                                    <th>Direccion</th>
                                    <th>Telefono </th>
                                    <th>Correo</th>
                                    <th>Encargado</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($maquilas as $maquila)
                                        <tr>
                                            <td>{{ $maquila->id }}</td>
                                            <td>{{ $maquila->nombre }}</td>
                                            <td>{{ $maquila->direccion }}</td>
                                            <td>{{ $maquila->telefono }}</td>
                                            <td>{{ $maquila->correo }}</td>
                                            <td>{{ $maquila->encargado }}</td>

                                            <td class="td-actions text-right">
                                                @can('user_show')
                                                    <a href="#"><i class="bi bi-card-text h3"></i></a>
                                                @endcan
                                                @can('user_edit')
                                                    <a href="{{ route('maquilas.edit', $maquila->id) }}"><i
                                                            class="bi bi-pencil h3 px-2"></i></a>
                                                @endcan
                                                @can('user_destroy')
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
                        {{ $maquilas->links('vendor.pagination.bootstrap-5') }}
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
