@extends('layouts.app', ['activePage' => 'examenes', 'activeItem' => 'examenes'])

@section('content')
    <div class="pagetitle">
        <h1>Examenes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Examenes</li>
            </ol>
        </nav>
    </div>


    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            @can('examenes_create')
                                <a href="{{ route('examenes.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo Examen</button>
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
                                    <th>Costo</th>
                                    <th>Maquila </th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($examenes as $examen)
                                        <tr>
                                            <td>{{ $examen->id }}</td>
                                            <td>{{ $examen->nombre }}</td>
                                            <td>{{ $examen->costo }}</td>
                                            <td>{{ $examen->maquila }}</td>
                                            <td class="td-actions text-right">
                                                {{--  @can('user_show')
                                                    <a href="{{ route('users.show', $parametro->id) }}">
                                                        <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                @endcan  --}}
                                                @can('examenes_edit')
                                                    <a href="{{ route('examenes.edit', $examen->id) }}"><i
                                                            class="bi bi-pencil h3 px-2"></i></a>
                                                @endcan
                                                @can('examenes_destroy')
                                                    <form class="alertaBorrar" <form class="alertaBorrar"
                                                        action="{{ route('examenes.destroy', $examen->id) }}" method="POST"
                                                        style="display: inline-block;">
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
