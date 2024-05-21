@extends('layouts.app', ['activePage' => 'lugares', 'activeItem' => 'parametros'])

@section('content')
    <div class="pagetitle">
        <h1>Lugares</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Lugares</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            @can('parametros_create')
                                {{--  <a href="{{ route('permissions.create') }}">  --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-nuevo">Nuevo Lugar</button>
                                {{--  </a>  --}}
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="labelTitulo">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Referencia</th>
                                    <th>Baja</th>
                                    <th>Alta </th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($lugares as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->tipo }}</td>
                                            <td>{{ $item->referencia }}</td>
                                            <td>{{ $item->bajo }}</td>
                                            <td>{{ $item->alto }}</td>
                                            <td class="td-actions text-right">
                                                {{--  @can('user_show')
                                                    <a href="{{ route('users.show', $parametro->id) }}">
                                                        <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                @endcan  --}}
                                                @can('parametros_edit')
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-update"
                                                        onclick="cargaItem('{{ $item->id }}','{{ $item->nombre }}')"><i
                                                            class="bi bi-pencil h3 px-2"></i>
                                                    </a>
                                                @endcan
                                                @can('parametros_destroy')
                                                    <form class="alertaBorrar"
                                                        action="{{ route('parametros.destroy', $item->id) }}" method="POST"
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
                        {{ $lugares->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{--  Modal Nuevo --}}
    <div class="modal fade" id="modal-nuevo" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-nuevo"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('catlugares.store') }}" method="post">
                            @csrf
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Nuevo Tipo de Lugar </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body ">
                                <div class="row card-body text-center">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>

                                    <div class="col-12 mb-3 ">
                                        <label class="form-label" for="">Nombre:</label></br>
                                        <input class="form-control" type="text" id="nombre" name="nombre"></br>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn btn-primary ">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Modal Update --}}
    <div class="modal fade" id="modal-update" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-update"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('catlugares.update', 1) }}" method="post" id="update">
                            @csrf
                            @method('put')
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Actualizar Tipo de lugar </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body ">
                                <div class="row card-body text-center">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>
                                    <div class="col-12   my-3 position-relative ">
                                        <input type="hidden" name="id" id="id">
                                        <label class="form-label" for="">Nombre:</label></br>
                                        <input class="form-control" type="text" id="nombreU" name="nombre" required>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn btn-primary ">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
        function cargaItem(id, nombre) {
            const txtId = document.getElementById('id');
            txtId.value = id;

            const txtNombre = document.getElementById('nombreU');
            txtNombre.value = nombre;

        }
    </script>
@endsection
